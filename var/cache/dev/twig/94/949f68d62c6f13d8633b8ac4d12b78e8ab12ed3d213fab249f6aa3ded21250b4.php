<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b6eb28cb55281e49c277711c356a13b59b28fc65656685b0b4b3b3de6fdea7a5 extends Twig_Template
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
        $__internal_5dc8c42972377f85a3a24fa8889c54f49119a82e310cfff4000f6328a87fd7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc8c42972377f85a3a24fa8889c54f49119a82e310cfff4000f6328a87fd7d1->enter($__internal_5dc8c42972377f85a3a24fa8889c54f49119a82e310cfff4000f6328a87fd7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_61e62e6952679206db996e0139e657b6a67c844129b41d0d3fe06a06d0efe9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e62e6952679206db996e0139e657b6a67c844129b41d0d3fe06a06d0efe9b9->enter($__internal_61e62e6952679206db996e0139e657b6a67c844129b41d0d3fe06a06d0efe9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5dc8c42972377f85a3a24fa8889c54f49119a82e310cfff4000f6328a87fd7d1->leave($__internal_5dc8c42972377f85a3a24fa8889c54f49119a82e310cfff4000f6328a87fd7d1_prof);

        
        $__internal_61e62e6952679206db996e0139e657b6a67c844129b41d0d3fe06a06d0efe9b9->leave($__internal_61e62e6952679206db996e0139e657b6a67c844129b41d0d3fe06a06d0efe9b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
