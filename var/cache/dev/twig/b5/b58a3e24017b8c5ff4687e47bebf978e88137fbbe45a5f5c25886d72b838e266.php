<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_71dfa4e2124f72b5b26407decca0b70baae2d248ff7effea0bb66ec636323969 extends Twig_Template
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
        $__internal_637c21e5ab3097d30442bb5e9d7da1050e39b62c5c11a470ecbf7b5a55233584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_637c21e5ab3097d30442bb5e9d7da1050e39b62c5c11a470ecbf7b5a55233584->enter($__internal_637c21e5ab3097d30442bb5e9d7da1050e39b62c5c11a470ecbf7b5a55233584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_59d92c5b8921f342a0ea0b902f4d791a93ac9c6098e5b72cbdf250caf16c6c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d92c5b8921f342a0ea0b902f4d791a93ac9c6098e5b72cbdf250caf16c6c63->enter($__internal_59d92c5b8921f342a0ea0b902f4d791a93ac9c6098e5b72cbdf250caf16c6c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_637c21e5ab3097d30442bb5e9d7da1050e39b62c5c11a470ecbf7b5a55233584->leave($__internal_637c21e5ab3097d30442bb5e9d7da1050e39b62c5c11a470ecbf7b5a55233584_prof);

        
        $__internal_59d92c5b8921f342a0ea0b902f4d791a93ac9c6098e5b72cbdf250caf16c6c63->leave($__internal_59d92c5b8921f342a0ea0b902f4d791a93ac9c6098e5b72cbdf250caf16c6c63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
