<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_192ea30233aafb31ac731b7f9af175d4dc1f971cf44cc11c0de57a98e1d0ee1d extends Twig_Template
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
        $__internal_3d8ab6636c355ff12a3504eca33e9a08c99ec80472e4a5fe106db656ff8fda5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8ab6636c355ff12a3504eca33e9a08c99ec80472e4a5fe106db656ff8fda5f->enter($__internal_3d8ab6636c355ff12a3504eca33e9a08c99ec80472e4a5fe106db656ff8fda5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a45ba9431dd7820cc2956f4446ccce31f64703114478e731bd9d12aebcedf797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45ba9431dd7820cc2956f4446ccce31f64703114478e731bd9d12aebcedf797->enter($__internal_a45ba9431dd7820cc2956f4446ccce31f64703114478e731bd9d12aebcedf797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3d8ab6636c355ff12a3504eca33e9a08c99ec80472e4a5fe106db656ff8fda5f->leave($__internal_3d8ab6636c355ff12a3504eca33e9a08c99ec80472e4a5fe106db656ff8fda5f_prof);

        
        $__internal_a45ba9431dd7820cc2956f4446ccce31f64703114478e731bd9d12aebcedf797->leave($__internal_a45ba9431dd7820cc2956f4446ccce31f64703114478e731bd9d12aebcedf797_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
