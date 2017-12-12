<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 12/12/17
 * Time: 13:47
 */

namespace projet2sdvBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('etat',EntityType::class,
		array(
			'class' 		=> 'projet2sdvBundle:Etat',
			'choice_label' 	=> 'libelle',
			'multiple'		=> false,
			'required' 		=> false,
			'label'			=> "Etat de la Commande"
		))
		->add('Valider', 	SubmitType::class);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class'	=> 'projet2sdvBundle\Entity\Commande'
		));
	}

	public function getBlockPrefix()
	{
		return 'projet2sdv_commande';
	}
}