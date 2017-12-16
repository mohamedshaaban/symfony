<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_1e1967994fda57445cf22443a8475894d1be11ea1cc855efeeb3ca734aecd016 extends Twig_Template
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
        $__internal_a1991d34956ce15a8c4e9df5a9d542b76edae115bf2e26b1e03e2f7722170fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1991d34956ce15a8c4e9df5a9d542b76edae115bf2e26b1e03e2f7722170fec->enter($__internal_a1991d34956ce15a8c4e9df5a9d542b76edae115bf2e26b1e03e2f7722170fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_5a8d73d361952f75ca8809104d9da39b37ef6442ddcffa640c8cc6bc74dff003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8d73d361952f75ca8809104d9da39b37ef6442ddcffa640c8cc6bc74dff003->enter($__internal_5a8d73d361952f75ca8809104d9da39b37ef6442ddcffa640c8cc6bc74dff003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a1991d34956ce15a8c4e9df5a9d542b76edae115bf2e26b1e03e2f7722170fec->leave($__internal_a1991d34956ce15a8c4e9df5a9d542b76edae115bf2e26b1e03e2f7722170fec_prof);

        
        $__internal_5a8d73d361952f75ca8809104d9da39b37ef6442ddcffa640c8cc6bc74dff003->leave($__internal_5a8d73d361952f75ca8809104d9da39b37ef6442ddcffa640c8cc6bc74dff003_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
