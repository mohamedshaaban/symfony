<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7f3ceec944c0953861a2ce5e61362e780aceb6b53f69db09bbe383fde9fa2a35 extends Twig_Template
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
        $__internal_627ac984cce0f34e9360d1511c74cd6137052d7439ce3180854e5f3acc964930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627ac984cce0f34e9360d1511c74cd6137052d7439ce3180854e5f3acc964930->enter($__internal_627ac984cce0f34e9360d1511c74cd6137052d7439ce3180854e5f3acc964930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4c4f22f896b980afe2a172ee0bfc6ca833be28abce173a94b74a4226c4715b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4f22f896b980afe2a172ee0bfc6ca833be28abce173a94b74a4226c4715b7b->enter($__internal_4c4f22f896b980afe2a172ee0bfc6ca833be28abce173a94b74a4226c4715b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_627ac984cce0f34e9360d1511c74cd6137052d7439ce3180854e5f3acc964930->leave($__internal_627ac984cce0f34e9360d1511c74cd6137052d7439ce3180854e5f3acc964930_prof);

        
        $__internal_4c4f22f896b980afe2a172ee0bfc6ca833be28abce173a94b74a4226c4715b7b->leave($__internal_4c4f22f896b980afe2a172ee0bfc6ca833be28abce173a94b74a4226c4715b7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
