<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_85eaa3b5896d052df734dde5834a49de90dffd4f008ea36f9d63e022edde1616 extends Twig_Template
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
        $__internal_a16cba911d7ce50abde292cecf241297752fd4caf47e7ebc1f2771e9c210a573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a16cba911d7ce50abde292cecf241297752fd4caf47e7ebc1f2771e9c210a573->enter($__internal_a16cba911d7ce50abde292cecf241297752fd4caf47e7ebc1f2771e9c210a573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_aa84768bc33cf634366f3657e5499706010044c2965ed4a738a1ecf942cc27fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa84768bc33cf634366f3657e5499706010044c2965ed4a738a1ecf942cc27fc->enter($__internal_aa84768bc33cf634366f3657e5499706010044c2965ed4a738a1ecf942cc27fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_a16cba911d7ce50abde292cecf241297752fd4caf47e7ebc1f2771e9c210a573->leave($__internal_a16cba911d7ce50abde292cecf241297752fd4caf47e7ebc1f2771e9c210a573_prof);

        
        $__internal_aa84768bc33cf634366f3657e5499706010044c2965ed4a738a1ecf942cc27fc->leave($__internal_aa84768bc33cf634366f3657e5499706010044c2965ed4a738a1ecf942cc27fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
