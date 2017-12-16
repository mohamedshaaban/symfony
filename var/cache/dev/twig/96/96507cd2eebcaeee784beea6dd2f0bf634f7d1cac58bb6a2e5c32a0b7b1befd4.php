<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b39bb5b69e09530a2169d4a8d25f42303058880b05d3bf6fc8e4e6ba1f2e5eef extends Twig_Template
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
        $__internal_526aaa1c0efd357e2abae177d00d8bbed8339f307306abb6c6724bf148b31a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526aaa1c0efd357e2abae177d00d8bbed8339f307306abb6c6724bf148b31a7f->enter($__internal_526aaa1c0efd357e2abae177d00d8bbed8339f307306abb6c6724bf148b31a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f0d1f19d649936061f2b02df2fa7a5e45269f67fd28a456a7a86ad83725b2add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d1f19d649936061f2b02df2fa7a5e45269f67fd28a456a7a86ad83725b2add->enter($__internal_f0d1f19d649936061f2b02df2fa7a5e45269f67fd28a456a7a86ad83725b2add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_526aaa1c0efd357e2abae177d00d8bbed8339f307306abb6c6724bf148b31a7f->leave($__internal_526aaa1c0efd357e2abae177d00d8bbed8339f307306abb6c6724bf148b31a7f_prof);

        
        $__internal_f0d1f19d649936061f2b02df2fa7a5e45269f67fd28a456a7a86ad83725b2add->leave($__internal_f0d1f19d649936061f2b02df2fa7a5e45269f67fd28a456a7a86ad83725b2add_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
