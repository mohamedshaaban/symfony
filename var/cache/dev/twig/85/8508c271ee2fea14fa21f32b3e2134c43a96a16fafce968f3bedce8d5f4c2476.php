<?php

/* SyliusUiBundle:Grid/Action:_link.html.twig */
class __TwigTemplate_b598f539bc169db65236d249010c3a87b620218922ccfbaf6b841f6edc53e18d extends Twig_Template
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
        $__internal_24ba62b58f818891fbdab2cca8e32b3965285827f99135abbc535dfda7a3a373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ba62b58f818891fbdab2cca8e32b3965285827f99135abbc535dfda7a3a373->enter($__internal_24ba62b58f818891fbdab2cca8e32b3965285827f99135abbc535dfda7a3a373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:_link.html.twig"));

        $__internal_7163e76dd018417bc1d10bd804d048addf8e91f842370d8412e3ac59c236558a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7163e76dd018417bc1d10bd804d048addf8e91f842370d8412e3ac59c236558a->enter($__internal_7163e76dd018417bc1d10bd804d048addf8e91f842370d8412e3ac59c236558a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:_link.html.twig"));

        // line 1
        $context["path"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "url", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 1, $this->getSourceContext()); })()), "url", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 1, $this->getSourceContext()); })()), "route", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "parameters", array()), array())) : (array())))));
        // line 2
        echo "
<a class=\"item\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "icon", array(), "any", true, true)) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 3, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
            echo " icon\"></i> ";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 3, $this->getSourceContext()); })()), "label", array())), "html", null, true);
        echo "</a>
";
        
        $__internal_24ba62b58f818891fbdab2cca8e32b3965285827f99135abbc535dfda7a3a373->leave($__internal_24ba62b58f818891fbdab2cca8e32b3965285827f99135abbc535dfda7a3a373_prof);

        
        $__internal_7163e76dd018417bc1d10bd804d048addf8e91f842370d8412e3ac59c236558a->leave($__internal_7163e76dd018417bc1d10bd804d048addf8e91f842370d8412e3ac59c236558a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set path = link.url is defined ? link.url : path(link.route, link.parameters|default([])) %}

<a class=\"item\" href=\"{{ path }}\">{% if link.icon is defined %}<i class=\"{{ link.icon }} icon\"></i> {% endif %}{{ link.label|trans }}</a>
", "SyliusUiBundle:Grid/Action:_link.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Action/_link.html.twig");
    }
}
