<?php

/* @SyliusUi/Grid/Action/_link.html.twig */
class __TwigTemplate_94d31c6be27e983c94635e8d1de7cd7d89750f1797643605745d867062a0608e extends Twig_Template
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
        $__internal_acde8c7d8826e0f9f407bb7d56faae14a079e1cd3dcbab79226ae0d96ee282c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acde8c7d8826e0f9f407bb7d56faae14a079e1cd3dcbab79226ae0d96ee282c3->enter($__internal_acde8c7d8826e0f9f407bb7d56faae14a079e1cd3dcbab79226ae0d96ee282c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Action/_link.html.twig"));

        $__internal_17064cb5ddfff25a2f0cc2f5c0eadf25d19cf0cff364d939d2c91e3a2e11afc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17064cb5ddfff25a2f0cc2f5c0eadf25d19cf0cff364d939d2c91e3a2e11afc4->enter($__internal_17064cb5ddfff25a2f0cc2f5c0eadf25d19cf0cff364d939d2c91e3a2e11afc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Action/_link.html.twig"));

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
        
        $__internal_acde8c7d8826e0f9f407bb7d56faae14a079e1cd3dcbab79226ae0d96ee282c3->leave($__internal_acde8c7d8826e0f9f407bb7d56faae14a079e1cd3dcbab79226ae0d96ee282c3_prof);

        
        $__internal_17064cb5ddfff25a2f0cc2f5c0eadf25d19cf0cff364d939d2c91e3a2e11afc4->leave($__internal_17064cb5ddfff25a2f0cc2f5c0eadf25d19cf0cff364d939d2c91e3a2e11afc4_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Action/_link.html.twig";
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
", "@SyliusUi/Grid/Action/_link.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Grid\\Action\\_link.html.twig");
    }
}
