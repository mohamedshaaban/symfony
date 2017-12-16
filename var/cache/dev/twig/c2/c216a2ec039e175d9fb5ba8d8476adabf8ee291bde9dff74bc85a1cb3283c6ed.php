<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_53f71f8597709c1b0faa1f3c0e93dc6275055995357f6b0c07da9c752177e0c6 extends Twig_Template
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
        $__internal_90e4bc486e7f4d55f75e7b7556b4f80caf866f3fc8979e68b05a5e7f803d9aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e4bc486e7f4d55f75e7b7556b4f80caf866f3fc8979e68b05a5e7f803d9aa0->enter($__internal_90e4bc486e7f4d55f75e7b7556b4f80caf866f3fc8979e68b05a5e7f803d9aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_7a875e91b38d73198602042ff4e57cf9c309b2a6f021e2329098680ffe289c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a875e91b38d73198602042ff4e57cf9c309b2a6f021e2329098680ffe289c89->enter($__internal_7a875e91b38d73198602042ff4e57cf9c309b2a6f021e2329098680ffe289c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_90e4bc486e7f4d55f75e7b7556b4f80caf866f3fc8979e68b05a5e7f803d9aa0->leave($__internal_90e4bc486e7f4d55f75e7b7556b4f80caf866f3fc8979e68b05a5e7f803d9aa0_prof);

        
        $__internal_7a875e91b38d73198602042ff4e57cf9c309b2a6f021e2329098680ffe289c89->leave($__internal_7a875e91b38d73198602042ff4e57cf9c309b2a6f021e2329098680ffe289c89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
