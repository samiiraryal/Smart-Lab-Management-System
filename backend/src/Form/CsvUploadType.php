<?php
// src/Form/CsvUploadType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class CsvUploadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('csv_file', FileType::class, [
            'label' => 'CSV File',
            'mapped' => false,
            'required' => true,
            'cons  traints' => [
                new File([
                    'mimeTypes' => [
                        'text/csv',
                        'text/plain',
                        'application/vnd.ms-excel',
                    ],
                    'mimeTypesMessage' => 'Please upload a valid CSV file',
                ])
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([]);
    }
}
