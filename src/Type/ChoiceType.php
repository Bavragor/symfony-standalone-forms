<?php

namespace SymfonySmartyStandaloneForms\Type;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType as ParentChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class ChoiceType extends ParentChoiceType
{
	public function buildView(FormView $view, FormInterface $form, array $options)
	{
		parent::buildView($view, $form, $options);

		$view->vars['help'] = $options['help'];
		$view->vars['input_icon'] = $options['input_icon'];
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		parent::configureOptions($resolver);
		$resolver->setDefaults(array(
			'help' => null,
			'input_icon' => null,
		));
	}
}