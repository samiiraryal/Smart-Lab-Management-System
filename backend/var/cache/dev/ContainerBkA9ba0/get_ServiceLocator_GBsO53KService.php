<?php

namespace ContainerBkA9ba0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GBsO53KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gBsO53K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gBsO53K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AttendanceController::addAttendance' => ['privates', '.service_locator.P.blNFL.App\\Controller\\AttendanceController::addAttendance()', 'getAttendanceControlleraddAttendanceService', true],
            'App\\Controller\\AttendanceController::getPresentStudents' => ['privates', '.service_locator.bsDb5E3.App\\Controller\\AttendanceController::getPresentStudents()', 'getAttendanceControllergetPresentStudentsService', true],
            'App\\Controller\\AttendanceController::getStudentAttendance' => ['privates', '.service_locator.bsDb5E3.App\\Controller\\AttendanceController::getStudentAttendance()', 'getAttendanceControllergetStudentAttendanceService', true],
            'App\\Controller\\AttendanceController::getStudentAttendanceByDate' => ['privates', '.service_locator.bsDb5E3.App\\Controller\\AttendanceController::getStudentAttendanceByDate()', 'getAttendanceControllergetStudentAttendanceByDateService', true],
            'App\\Controller\\ReportController::addReport' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ReportController::addReport()', 'getReportControlleraddReportService', true],
            'App\\Controller\\ReportController::viewReportByStudentAndDate' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ReportController::viewReportByStudentAndDate()', 'getReportControllerviewReportByStudentAndDateService', true],
            'App\\Controller\\ReportController::viewReportsByDate' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ReportController::viewReportsByDate()', 'getReportControllerviewReportsByDateService', true],
            'App\\Controller\\StudentController::index' => ['privates', '.service_locator.Y.RDPi2.App\\Controller\\StudentController::index()', 'getStudentControllerindexService', true],
            'App\\Controller\\StudentController::studentSectionAndStudentSemester' => ['privates', '.service_locator.Y.RDPi2.App\\Controller\\StudentController::studentSectionAndStudentSemester()', 'getStudentControllerstudentSectionAndStudentSemesterService', true],
            'App\\Controller\\StudentController::upload' => ['privates', '.service_locator.TWxDQA4.App\\Controller\\StudentController::upload()', 'getStudentControlleruploadService', true],
            'App\\Controller\\StudentController::withSection' => ['privates', '.service_locator.Y.RDPi2.App\\Controller\\StudentController::withSection()', 'getStudentControllerwithSectionService', true],
            'App\\Controller\\StudentController::withSemester' => ['privates', '.service_locator.Y.RDPi2.App\\Controller\\StudentController::withSemester()', 'getStudentControllerwithSemesterService', true],
            'App\\Controller\\StudentController::withsubject' => ['privates', '.service_locator.Y.RDPi2.App\\Controller\\StudentController::withsubject()', 'getStudentControllerwithsubjectService', true],
            'App\\Controller\\TeacherController::delete' => ['privates', '.service_locator.dVVaH_u.App\\Controller\\TeacherController::delete()', 'getTeacherControllerdeleteService', true],
            'App\\Controller\\TeacherController::edit' => ['privates', '.service_locator.dVVaH_u.App\\Controller\\TeacherController::edit()', 'getTeacherControllereditService', true],
            'App\\Controller\\TeacherController::index' => ['privates', '.service_locator.9UJDqDl.App\\Controller\\TeacherController::index()', 'getTeacherControllerindexService', true],
            'App\\Controller\\TeacherController::new' => ['privates', '.service_locator.P.blNFL.App\\Controller\\TeacherController::new()', 'getTeacherControllernewService', true],
            'App\\Controller\\TeacherController::show' => ['privates', '.service_locator.z3EEKdA.App\\Controller\\TeacherController::show()', 'getTeacherControllershowService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Controller\\AttendanceController:addAttendance' => ['privates', '.service_locator.P.blNFL.App\\Controller\\AttendanceController::addAttendance()', 'getAttendanceControlleraddAttendanceService', true],
            'App\\Controller\\AttendanceController:getPresentStudents' => ['privates', '.service_locator.bsDb5E3.App\\Controller\\AttendanceController::getPresentStudents()', 'getAttendanceControllergetPresentStudentsService', true],
            'App\\Controller\\AttendanceController:getStudentAttendance' => ['privates', '.service_locator.bsDb5E3.App\\Controller\\AttendanceController::getStudentAttendance()', 'getAttendanceControllergetStudentAttendanceService', true],
            'App\\Controller\\AttendanceController:getStudentAttendanceByDate' => ['privates', '.service_locator.bsDb5E3.App\\Controller\\AttendanceController::getStudentAttendanceByDate()', 'getAttendanceControllergetStudentAttendanceByDateService', true],
            'App\\Controller\\ReportController:addReport' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ReportController::addReport()', 'getReportControlleraddReportService', true],
            'App\\Controller\\ReportController:viewReportByStudentAndDate' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ReportController::viewReportByStudentAndDate()', 'getReportControllerviewReportByStudentAndDateService', true],
            'App\\Controller\\ReportController:viewReportsByDate' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ReportController::viewReportsByDate()', 'getReportControllerviewReportsByDateService', true],
            'App\\Controller\\StudentController:index' => ['privates', '.service_locator.Y.RDPi2.App\\Controller\\StudentController::index()', 'getStudentControllerindexService', true],
            'App\\Controller\\StudentController:studentSectionAndStudentSemester' => ['privates', '.service_locator.Y.RDPi2.App\\Controller\\StudentController::studentSectionAndStudentSemester()', 'getStudentControllerstudentSectionAndStudentSemesterService', true],
            'App\\Controller\\StudentController:upload' => ['privates', '.service_locator.TWxDQA4.App\\Controller\\StudentController::upload()', 'getStudentControlleruploadService', true],
            'App\\Controller\\StudentController:withSection' => ['privates', '.service_locator.Y.RDPi2.App\\Controller\\StudentController::withSection()', 'getStudentControllerwithSectionService', true],
            'App\\Controller\\StudentController:withSemester' => ['privates', '.service_locator.Y.RDPi2.App\\Controller\\StudentController::withSemester()', 'getStudentControllerwithSemesterService', true],
            'App\\Controller\\StudentController:withsubject' => ['privates', '.service_locator.Y.RDPi2.App\\Controller\\StudentController::withsubject()', 'getStudentControllerwithsubjectService', true],
            'App\\Controller\\TeacherController:delete' => ['privates', '.service_locator.dVVaH_u.App\\Controller\\TeacherController::delete()', 'getTeacherControllerdeleteService', true],
            'App\\Controller\\TeacherController:edit' => ['privates', '.service_locator.dVVaH_u.App\\Controller\\TeacherController::edit()', 'getTeacherControllereditService', true],
            'App\\Controller\\TeacherController:index' => ['privates', '.service_locator.9UJDqDl.App\\Controller\\TeacherController::index()', 'getTeacherControllerindexService', true],
            'App\\Controller\\TeacherController:new' => ['privates', '.service_locator.P.blNFL.App\\Controller\\TeacherController::new()', 'getTeacherControllernewService', true],
            'App\\Controller\\TeacherController:show' => ['privates', '.service_locator.z3EEKdA.App\\Controller\\TeacherController::show()', 'getTeacherControllershowService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
        ], [
            'App\\Controller\\AttendanceController::addAttendance' => '?',
            'App\\Controller\\AttendanceController::getPresentStudents' => '?',
            'App\\Controller\\AttendanceController::getStudentAttendance' => '?',
            'App\\Controller\\AttendanceController::getStudentAttendanceByDate' => '?',
            'App\\Controller\\ReportController::addReport' => '?',
            'App\\Controller\\ReportController::viewReportByStudentAndDate' => '?',
            'App\\Controller\\ReportController::viewReportsByDate' => '?',
            'App\\Controller\\StudentController::index' => '?',
            'App\\Controller\\StudentController::studentSectionAndStudentSemester' => '?',
            'App\\Controller\\StudentController::upload' => '?',
            'App\\Controller\\StudentController::withSection' => '?',
            'App\\Controller\\StudentController::withSemester' => '?',
            'App\\Controller\\StudentController::withsubject' => '?',
            'App\\Controller\\TeacherController::delete' => '?',
            'App\\Controller\\TeacherController::edit' => '?',
            'App\\Controller\\TeacherController::index' => '?',
            'App\\Controller\\TeacherController::new' => '?',
            'App\\Controller\\TeacherController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AttendanceController:addAttendance' => '?',
            'App\\Controller\\AttendanceController:getPresentStudents' => '?',
            'App\\Controller\\AttendanceController:getStudentAttendance' => '?',
            'App\\Controller\\AttendanceController:getStudentAttendanceByDate' => '?',
            'App\\Controller\\ReportController:addReport' => '?',
            'App\\Controller\\ReportController:viewReportByStudentAndDate' => '?',
            'App\\Controller\\ReportController:viewReportsByDate' => '?',
            'App\\Controller\\StudentController:index' => '?',
            'App\\Controller\\StudentController:studentSectionAndStudentSemester' => '?',
            'App\\Controller\\StudentController:upload' => '?',
            'App\\Controller\\StudentController:withSection' => '?',
            'App\\Controller\\StudentController:withSemester' => '?',
            'App\\Controller\\StudentController:withsubject' => '?',
            'App\\Controller\\TeacherController:delete' => '?',
            'App\\Controller\\TeacherController:edit' => '?',
            'App\\Controller\\TeacherController:index' => '?',
            'App\\Controller\\TeacherController:new' => '?',
            'App\\Controller\\TeacherController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
