<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0099fcb356f4f4c65ea97c870338f3d084159dbdb688ad394544a1a40420eccd extends Twig_Template
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
        $__internal_4b00b2547011e4275b49ff1124636355080a5e5194887e6126d9ba01aff53ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b00b2547011e4275b49ff1124636355080a5e5194887e6126d9ba01aff53ff7->enter($__internal_4b00b2547011e4275b49ff1124636355080a5e5194887e6126d9ba01aff53ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_cc50a7dd85461f8faefec5fbed6c41b927c6b1fcc68bbaca32d51945d157b651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc50a7dd85461f8faefec5fbed6c41b927c6b1fcc68bbaca32d51945d157b651->enter($__internal_cc50a7dd85461f8faefec5fbed6c41b927c6b1fcc68bbaca32d51945d157b651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4b00b2547011e4275b49ff1124636355080a5e5194887e6126d9ba01aff53ff7->leave($__internal_4b00b2547011e4275b49ff1124636355080a5e5194887e6126d9ba01aff53ff7_prof);

        
        $__internal_cc50a7dd85461f8faefec5fbed6c41b927c6b1fcc68bbaca32d51945d157b651->leave($__internal_cc50a7dd85461f8faefec5fbed6c41b927c6b1fcc68bbaca32d51945d157b651_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
