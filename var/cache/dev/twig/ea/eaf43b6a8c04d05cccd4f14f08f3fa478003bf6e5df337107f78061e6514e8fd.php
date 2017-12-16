<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_b90acac641001449d1639e2afb9ff2e1e4bd89e5e24152f3e546ae47eacbabce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e02aa12123c8c1f29618a05989eb66e4fe319584606af4bd045b24fcf2427982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02aa12123c8c1f29618a05989eb66e4fe319584606af4bd045b24fcf2427982->enter($__internal_e02aa12123c8c1f29618a05989eb66e4fe319584606af4bd045b24fcf2427982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_0cf96847a8cb6c6ca1b10df8018055eda866748dd8dab0a4290b70bec44e7b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf96847a8cb6c6ca1b10df8018055eda866748dd8dab0a4290b70bec44e7b81->enter($__internal_0cf96847a8cb6c6ca1b10df8018055eda866748dd8dab0a4290b70bec44e7b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e02aa12123c8c1f29618a05989eb66e4fe319584606af4bd045b24fcf2427982->leave($__internal_e02aa12123c8c1f29618a05989eb66e4fe319584606af4bd045b24fcf2427982_prof);

        
        $__internal_0cf96847a8cb6c6ca1b10df8018055eda866748dd8dab0a4290b70bec44e7b81->leave($__internal_0cf96847a8cb6c6ca1b10df8018055eda866748dd8dab0a4290b70bec44e7b81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
