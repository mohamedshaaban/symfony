<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_7d160fc8619aabd2c3ce27c3a507422791f2a08bc451159a45a06589b17c76bc extends Twig_Template
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
        $__internal_08d74a349ba84778c799b8306296cd839268a28b393a1c4fe1e718aeb9d1e840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d74a349ba84778c799b8306296cd839268a28b393a1c4fe1e718aeb9d1e840->enter($__internal_08d74a349ba84778c799b8306296cd839268a28b393a1c4fe1e718aeb9d1e840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9e9b1894670abcbcd8343d2a97412edfb354a491896104d510c223451b91a452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9b1894670abcbcd8343d2a97412edfb354a491896104d510c223451b91a452->enter($__internal_9e9b1894670abcbcd8343d2a97412edfb354a491896104d510c223451b91a452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_08d74a349ba84778c799b8306296cd839268a28b393a1c4fe1e718aeb9d1e840->leave($__internal_08d74a349ba84778c799b8306296cd839268a28b393a1c4fe1e718aeb9d1e840_prof);

        
        $__internal_9e9b1894670abcbcd8343d2a97412edfb354a491896104d510c223451b91a452->leave($__internal_9e9b1894670abcbcd8343d2a97412edfb354a491896104d510c223451b91a452_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
