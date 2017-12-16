<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e337414fb5bf4a35471b64860f03b1bcac58fa302acb27949fffb421e18eaccf extends Twig_Template
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
        $__internal_ef0c53670c507c36e572bff29dda273a7a09489cc547d68600beb35887c8bc7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0c53670c507c36e572bff29dda273a7a09489cc547d68600beb35887c8bc7b->enter($__internal_ef0c53670c507c36e572bff29dda273a7a09489cc547d68600beb35887c8bc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_78ef9abb4bc32b49ebc46c18c9cce11b46175d5a9b09c92cb5b13cf4e66fb5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ef9abb4bc32b49ebc46c18c9cce11b46175d5a9b09c92cb5b13cf4e66fb5a5->enter($__internal_78ef9abb4bc32b49ebc46c18c9cce11b46175d5a9b09c92cb5b13cf4e66fb5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ef0c53670c507c36e572bff29dda273a7a09489cc547d68600beb35887c8bc7b->leave($__internal_ef0c53670c507c36e572bff29dda273a7a09489cc547d68600beb35887c8bc7b_prof);

        
        $__internal_78ef9abb4bc32b49ebc46c18c9cce11b46175d5a9b09c92cb5b13cf4e66fb5a5->leave($__internal_78ef9abb4bc32b49ebc46c18c9cce11b46175d5a9b09c92cb5b13cf4e66fb5a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
