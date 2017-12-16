<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_097822d68c027da3539af5e75bdb4c61eb31106e7c0879885035608bdf67b9ec extends Twig_Template
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
        $__internal_c95f8c8b91c36c9c02cdeb7b908daf5f26c8d0892347969fa2da211f6942c69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95f8c8b91c36c9c02cdeb7b908daf5f26c8d0892347969fa2da211f6942c69c->enter($__internal_c95f8c8b91c36c9c02cdeb7b908daf5f26c8d0892347969fa2da211f6942c69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_dfac7ce39ffbb16f6f885c8d4ad946143628d74c706a33e50acd0acde42531d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfac7ce39ffbb16f6f885c8d4ad946143628d74c706a33e50acd0acde42531d7->enter($__internal_dfac7ce39ffbb16f6f885c8d4ad946143628d74c706a33e50acd0acde42531d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c95f8c8b91c36c9c02cdeb7b908daf5f26c8d0892347969fa2da211f6942c69c->leave($__internal_c95f8c8b91c36c9c02cdeb7b908daf5f26c8d0892347969fa2da211f6942c69c_prof);

        
        $__internal_dfac7ce39ffbb16f6f885c8d4ad946143628d74c706a33e50acd0acde42531d7->leave($__internal_dfac7ce39ffbb16f6f885c8d4ad946143628d74c706a33e50acd0acde42531d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
