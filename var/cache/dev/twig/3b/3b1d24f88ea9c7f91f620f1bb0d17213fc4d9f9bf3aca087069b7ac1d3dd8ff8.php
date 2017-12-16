<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ed9124890082f0bfdd52a1bf90501c1f8686ad1f206f5e916d05d3455f2af400 extends Twig_Template
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
        $__internal_e57c033ffd2bf056b6c3ee814b0f273ee805eac95d606836805c40625eb03b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57c033ffd2bf056b6c3ee814b0f273ee805eac95d606836805c40625eb03b9c->enter($__internal_e57c033ffd2bf056b6c3ee814b0f273ee805eac95d606836805c40625eb03b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ef5044ce8a2640e277b0f5418fee5fe42680f5f7b35b4ee409ee688afd8f9d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5044ce8a2640e277b0f5418fee5fe42680f5f7b35b4ee409ee688afd8f9d4f->enter($__internal_ef5044ce8a2640e277b0f5418fee5fe42680f5f7b35b4ee409ee688afd8f9d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e57c033ffd2bf056b6c3ee814b0f273ee805eac95d606836805c40625eb03b9c->leave($__internal_e57c033ffd2bf056b6c3ee814b0f273ee805eac95d606836805c40625eb03b9c_prof);

        
        $__internal_ef5044ce8a2640e277b0f5418fee5fe42680f5f7b35b4ee409ee688afd8f9d4f->leave($__internal_ef5044ce8a2640e277b0f5418fee5fe42680f5f7b35b4ee409ee688afd8f9d4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
