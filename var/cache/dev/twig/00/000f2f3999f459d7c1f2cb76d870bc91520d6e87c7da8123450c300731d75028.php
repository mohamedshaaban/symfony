<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_c4835836c3d1509406f1188708d54c717ee4575490da209d46eff4aace3c7a8f extends Twig_Template
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
        $__internal_25e845efa52ac67f626ec018255546bceabf47aa0f055a45767136fb132394f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e845efa52ac67f626ec018255546bceabf47aa0f055a45767136fb132394f8->enter($__internal_25e845efa52ac67f626ec018255546bceabf47aa0f055a45767136fb132394f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6a5dc756925df8cad61edb65eebe171bcaec3a267a701aced96291ce9df0bd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5dc756925df8cad61edb65eebe171bcaec3a267a701aced96291ce9df0bd8c->enter($__internal_6a5dc756925df8cad61edb65eebe171bcaec3a267a701aced96291ce9df0bd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_25e845efa52ac67f626ec018255546bceabf47aa0f055a45767136fb132394f8->leave($__internal_25e845efa52ac67f626ec018255546bceabf47aa0f055a45767136fb132394f8_prof);

        
        $__internal_6a5dc756925df8cad61edb65eebe171bcaec3a267a701aced96291ce9df0bd8c->leave($__internal_6a5dc756925df8cad61edb65eebe171bcaec3a267a701aced96291ce9df0bd8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
