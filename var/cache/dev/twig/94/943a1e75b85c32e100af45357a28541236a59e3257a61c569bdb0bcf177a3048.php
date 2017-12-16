<?php

/* SyliusAdminBundle:Common:_channel.html.twig */
class __TwigTemplate_509880ce8c76ef2ecd7d2b0464c2bf5ddfc8afdeb61440f8941e7300640178a3 extends Twig_Template
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
        $__internal_baacc5866e9884dba73f17b3f7e2823437b45dd845c463f510cdb83c9c4bc811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baacc5866e9884dba73f17b3f7e2823437b45dd845c463f510cdb83c9c4bc811->enter($__internal_baacc5866e9884dba73f17b3f7e2823437b45dd845c463f510cdb83c9c4bc811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common:_channel.html.twig"));

        $__internal_9c576975c8290d0efaf5acccc594d616a4624faad74920179eba6124be9bc350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c576975c8290d0efaf5acccc594d616a4624faad74920179eba6124be9bc350->enter($__internal_9c576975c8290d0efaf5acccc594d616a4624faad74920179eba6124be9bc350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common:_channel.html.twig"));

        // line 1
        echo "<span class=\"ui small empty circular label\" style=\"background-color: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 1, $this->getSourceContext()); })()), "color", array()), "html", null, true);
        echo "\"></span> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 1, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 1, $this->getSourceContext()); })()), "code", array()), "html", null, true);
        echo ")
";
        
        $__internal_baacc5866e9884dba73f17b3f7e2823437b45dd845c463f510cdb83c9c4bc811->leave($__internal_baacc5866e9884dba73f17b3f7e2823437b45dd845c463f510cdb83c9c4bc811_prof);

        
        $__internal_9c576975c8290d0efaf5acccc594d616a4624faad74920179eba6124be9bc350->leave($__internal_9c576975c8290d0efaf5acccc594d616a4624faad74920179eba6124be9bc350_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Common:_channel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui small empty circular label\" style=\"background-color: {{ channel.color }}\"></span> {{ channel.name }} ({{ channel.code }})
", "SyliusAdminBundle:Common:_channel.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Common/_channel.html.twig");
    }
}
