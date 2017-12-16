<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_924409c51fa330a99cd09e63cc0423f6e4c3c51e5bc42ac974d005de3029f0b3 extends Twig_Template
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
        $__internal_869221dbc974f9cf3f4183f135ca929b4e27afa28197c221f31ce00ea0e4f417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869221dbc974f9cf3f4183f135ca929b4e27afa28197c221f31ce00ea0e4f417->enter($__internal_869221dbc974f9cf3f4183f135ca929b4e27afa28197c221f31ce00ea0e4f417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_14f8fe27a978f855a9fc8f51f9b8812acf2fcfd001097a8e2030a71b457f85ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f8fe27a978f855a9fc8f51f9b8812acf2fcfd001097a8e2030a71b457f85ad->enter($__internal_14f8fe27a978f855a9fc8f51f9b8812acf2fcfd001097a8e2030a71b457f85ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_869221dbc974f9cf3f4183f135ca929b4e27afa28197c221f31ce00ea0e4f417->leave($__internal_869221dbc974f9cf3f4183f135ca929b4e27afa28197c221f31ce00ea0e4f417_prof);

        
        $__internal_14f8fe27a978f855a9fc8f51f9b8812acf2fcfd001097a8e2030a71b457f85ad->leave($__internal_14f8fe27a978f855a9fc8f51f9b8812acf2fcfd001097a8e2030a71b457f85ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
