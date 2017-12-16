<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4686abbdca58e1cc29087d6a292a3eb416d487d236a1c2db08806f9fd72be003 extends Twig_Template
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
        $__internal_4c7031e75a2b6a48821af9b89972bfb394903602be65ad8d4846fd3371350651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7031e75a2b6a48821af9b89972bfb394903602be65ad8d4846fd3371350651->enter($__internal_4c7031e75a2b6a48821af9b89972bfb394903602be65ad8d4846fd3371350651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_2627746d82c52ba2059d2e381a9a4e094571e089927eac20f0ec3a2d09ca6bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2627746d82c52ba2059d2e381a9a4e094571e089927eac20f0ec3a2d09ca6bf3->enter($__internal_2627746d82c52ba2059d2e381a9a4e094571e089927eac20f0ec3a2d09ca6bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4c7031e75a2b6a48821af9b89972bfb394903602be65ad8d4846fd3371350651->leave($__internal_4c7031e75a2b6a48821af9b89972bfb394903602be65ad8d4846fd3371350651_prof);

        
        $__internal_2627746d82c52ba2059d2e381a9a4e094571e089927eac20f0ec3a2d09ca6bf3->leave($__internal_2627746d82c52ba2059d2e381a9a4e094571e089927eac20f0ec3a2d09ca6bf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
