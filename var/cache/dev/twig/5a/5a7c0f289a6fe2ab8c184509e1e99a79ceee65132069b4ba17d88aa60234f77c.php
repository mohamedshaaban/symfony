<?php

/* SyliusAdminBundle:Promotion/Grid/Field:usedWithUsageLimit.html.twig */
class __TwigTemplate_886ee82ab7f3048b50d11bc6de993dd190f3b50d89cadf2ef10ae69042500822 extends Twig_Template
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
        $__internal_cd623e3502bf598e52a496e84f23b984b1e8e9b663b80d098cc78cd575030889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd623e3502bf598e52a496e84f23b984b1e8e9b663b80d098cc78cd575030889->enter($__internal_cd623e3502bf598e52a496e84f23b984b1e8e9b663b80d098cc78cd575030889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion/Grid/Field:usedWithUsageLimit.html.twig"));

        $__internal_e29e2946609c8a319ad5d5c55e0875814f67dc38c7cf71ebb3170c011f5c5662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29e2946609c8a319ad5d5c55e0875814f67dc38c7cf71ebb3170c011f5c5662->enter($__internal_e29e2946609c8a319ad5d5c55e0875814f67dc38c7cf71ebb3170c011f5c5662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion/Grid/Field:usedWithUsageLimit.html.twig"));

        // line 1
        echo "<div class=\"ui red label\">
    ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 2, $this->getSourceContext()); })()), "used", array()), "html", null, true);
        echo "
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "usageLimit", array())) {
            // line 4
            echo "            /";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 4, $this->getSourceContext()); })()), "usageLimit", array()), "html", null, true);
            echo "
    ";
        }
        // line 6
        echo "</div>
";
        
        $__internal_cd623e3502bf598e52a496e84f23b984b1e8e9b663b80d098cc78cd575030889->leave($__internal_cd623e3502bf598e52a496e84f23b984b1e8e9b663b80d098cc78cd575030889_prof);

        
        $__internal_e29e2946609c8a319ad5d5c55e0875814f67dc38c7cf71ebb3170c011f5c5662->leave($__internal_e29e2946609c8a319ad5d5c55e0875814f67dc38c7cf71ebb3170c011f5c5662_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Promotion/Grid/Field:usedWithUsageLimit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui red label\">
    {{ data.used }}
    {% if data.usageLimit %}
            /{{ data.usageLimit }}
    {% endif %}
</div>
", "SyliusAdminBundle:Promotion/Grid/Field:usedWithUsageLimit.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Promotion/Grid/Field/usedWithUsageLimit.html.twig");
    }
}
