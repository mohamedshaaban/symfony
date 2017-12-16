<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_800d2cccceb42a32d2c1550ec18be557213d4f8f4d7bfee59deea450e305ecbf extends Twig_Template
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
        $__internal_05118893f4e26a1193ca02af44358baf73855df0b9ae230f4d17634e0c70072d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05118893f4e26a1193ca02af44358baf73855df0b9ae230f4d17634e0c70072d->enter($__internal_05118893f4e26a1193ca02af44358baf73855df0b9ae230f4d17634e0c70072d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_b9e67abd2cdc4ffbd4638f98b7a6df310fc7ccadde298f0b2dba84c47ddb30bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e67abd2cdc4ffbd4638f98b7a6df310fc7ccadde298f0b2dba84c47ddb30bc->enter($__internal_b9e67abd2cdc4ffbd4638f98b7a6df310fc7ccadde298f0b2dba84c47ddb30bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_05118893f4e26a1193ca02af44358baf73855df0b9ae230f4d17634e0c70072d->leave($__internal_05118893f4e26a1193ca02af44358baf73855df0b9ae230f4d17634e0c70072d_prof);

        
        $__internal_b9e67abd2cdc4ffbd4638f98b7a6df310fc7ccadde298f0b2dba84c47ddb30bc->leave($__internal_b9e67abd2cdc4ffbd4638f98b7a6df310fc7ccadde298f0b2dba84c47ddb30bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
