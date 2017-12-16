<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_7c7892a2b1a77bc259504ac12dcf9199c604a67ee28ac124ef020953e9a79ee3 extends Twig_Template
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
        $__internal_66f4eccdd5c4f565a6907da1d868b2870f2de84dfdb52056831dcd32e7664f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f4eccdd5c4f565a6907da1d868b2870f2de84dfdb52056831dcd32e7664f2d->enter($__internal_66f4eccdd5c4f565a6907da1d868b2870f2de84dfdb52056831dcd32e7664f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_08c63949df0698b6ee8c080cf1f74c52b6033b7705a479978899b20a019d3a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c63949df0698b6ee8c080cf1f74c52b6033b7705a479978899b20a019d3a63->enter($__internal_08c63949df0698b6ee8c080cf1f74c52b6033b7705a479978899b20a019d3a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_66f4eccdd5c4f565a6907da1d868b2870f2de84dfdb52056831dcd32e7664f2d->leave($__internal_66f4eccdd5c4f565a6907da1d868b2870f2de84dfdb52056831dcd32e7664f2d_prof);

        
        $__internal_08c63949df0698b6ee8c080cf1f74c52b6033b7705a479978899b20a019d3a63->leave($__internal_08c63949df0698b6ee8c080cf1f74c52b6033b7705a479978899b20a019d3a63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
