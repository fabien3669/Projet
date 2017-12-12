<?php

namespace projet2sdvBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class sproduitsType extends AbstractType
{
	public function buildForm(FormBuilderInterface $formBuilder, array $options){
		$formBuilder
			->add('Nom', 		TextType::class, array('label' => "Nom du véhicule"))
			->add('Prix', 		TextType::class)
			->add('Image', 	ImageType::class)
			->add('TypeProduit',EntityType::class,
				array(
					'class' 		=> 'projet2sdvBundle:stypeProduits',
					'choice_label' 	=> 'libelle',
					'multiple'		=> false,
					'required' 		=> false,
					'label'			=> "Type de véhicule"
				))
			->add('Valider', 	SubmitType::class);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class'	=> 'projet2sdvBundle\Entity\sproduits'
		));
	}

	public function getBlockPrefix()
	{
		return 'projet2sdv_sproduits';
	}
}