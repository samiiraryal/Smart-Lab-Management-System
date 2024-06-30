<?php

namespace App\Controller;

use App\Entity\Attendance;
use App\Entity\Student;
use App\Form\StudentType;
use App\Repository\AttendanceRepository;
use App\Repository\StudentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/student')]
class StudentController extends AbstractController
{
    private $csvDirectory;

    public function __construct(ParameterBagInterface $params)
    {
        $this->csvDirectory = $params->get('csv_directory');
    }

    #[Route('/all', name: 'app_all_student', methods: ['GET'])]
    public function index(StudentRepository $studentRepositiory): JsonResponse
    {
        $students = $studentRepositiory->findStudentsByTeacherName('rijju');
        $data = array_map(function ($student) {
            return [
                'id' => $student->getId(),
                'name' => $student->getName(),
                'symbolno' => $student->getSymbolno(),
                'semester' => $student->getSemester(),
                'section' => $student->getSection(),
            ];
        }, $students);
        return $this->json($data);
    }
    #[Route('/semester/{semester}', name: 'app_student_semester', methods: ['GET'])]
    public function withSemester(StudentRepository $studentRepositiory, int $semester,): JsonResponse
    {

        $students = $studentRepositiory->findStudentsByTeacherIdAndStudentSemester(1, $semester);
        $data = array_map(function ($student) {
            return [
                'id' => $student->getId(),
                'name' => $student->getName(),
                'symbolno' => $student->getSymbolno(),
                'semester' => $student->getSemester(),
                'section' => $student->getSection(),
            ];
        }, $students);
        return $this->json($data);
    }
    #[Route('/section/{section}', name: 'app_student_section', methods: ['GET'])]
    public function withSection(StudentRepository $studentRepositiory, string $section,): JsonResponse
    {

        $students = $studentRepositiory->findStudentsByTeacherIdAndStudentSection(1, $section);
        $data = array_map(function ($student) {
            return [
                'id' => $student->getId(),
                'name' => $student->getName(),
                'symbolno' => $student->getSymbolno(),
                'semester' => $student->getSemester(),
                'section' => $student->getSection(),
            ];
        }, $students);
        return $this->json($data);
    }
    #[Route('/subject/{subject}', name: 'app_student_subject', methods: ['GET'])]
    public function withsubject(StudentRepository $studentRepositiory, int $subject,): JsonResponse
    {

        $students = $studentRepositiory->findStudentsByTeacherIdAndStudentSubject(1, $subject);
        $data = array_map(function ($student) {
            return [
                'id' => $student->getId(),
                'name' => $student->getName(),
                'symbolno' => $student->getSymbolno(),
                'semester' => $student->getSemester(),
                'section' => $student->getSection(),
            ];
        }, $students);
        return $this->json($data);
    }

    #[Route('/semester/{semester}/section/{section}', name: 'app_student_withsectionandsemester_index', methods: ['GET'])]
    public function studentSectionAndStudentSemester(StudentRepository $studentRepositiory, string $section, int $semester,): JsonResponse
    {

        $students = $studentRepositiory->findStudentsByTeacherIdAndStudentSectionAndStudentSemester(3, $section, $semester);
        $data = array_map(function ($student) {
            return [
                'id' => $student->getId(),
                'name' => $student->getName(),
                'symbolno' => $student->getSymbolno(),
                'semester' => $student->getSemester(),
                'section' => $student->getSection(),
            ];
        }, $students);
        return $this->json($data);
    }

    //---------------CSV FILE----------------------
    #[Route('/upload', name: 'student_upload', methods: ['POST'])]
    public function upload(Request $request): JsonResponse
    {
        $csvFile = $request->files->get('csv_file');
        if (!$csvFile) {
        return $this->json(['message' => 'No file uploaded'], Response::HTTP_BAD_REQUEST);
        }

        // Move the uploaded file to the configured directory
    $originalFilename = pathinfo($csvFile->getClientOriginalName(), PATHINFO_FILENAME);
    $newFilename = $originalFilename.'-'.uniqid().'.'.$csvFile->guessExtension();

    try {
        $csvFile->move($this->csvDirectory,$newFilename);
    } catch (FileException $e) {
        return $this->json(['message' => 'Failed to upload file: '.$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    // Parse the uploaded CSV file
    $filePath = $this->csvDirectory.'/'.$newFilename;
        $csvData = array_map('str_getcsv', file($filePath));
        $header = array_shift($csvData);
        $data = [];
        foreach ($csvData as $row) {
            $data[] = array_combine($header, $row);
        }

        $teacher = $this->getUser();
        foreach ($data as $row) {
            $student = new Student();
            $student->setName($row['name']);
            $student->setSymbolno($row['symbolno']);
            $student->setSemester((int)$row['semester']);
            $student->setSection($row['section']);
            // $student->setTeacher($this->getUser());
            $teacher->addStudent($student);
            $em->persist($student);
        }
        $em->flush();
        return $this->json(['message' => 'CSV file uploaded successfully']);
    }

    // #[Route('/{id}', name: 'app_student_show', methods: ['GET'])]
    // public function show(Student $student): JsonResponse
    // {
    //     return $this->json([
    //         'id' => $student->getId(),
    //         'name' => $student->getName(),
    //         'email' => $student->getEmail(),
    //         'semester' => $student->getSemester(),
    //         'section' => $student->getSection(),
    //     ]);
    // }

}
