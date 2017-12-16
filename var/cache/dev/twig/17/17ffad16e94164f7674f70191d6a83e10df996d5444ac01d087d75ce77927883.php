<?php

/* SyliusUiBundle:Grid/Field:logData.html.twig */
class __TwigTemplate_d86fb6dfe5ffd4545de0f500bd0ab1bcd454f644f7ebabb154340a415b4cef9f extends Twig_Template
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
        $__internal_000da59c363a65adfdc124538dfc3178e113d6a91c336abe113a19eb15813919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000da59c363a65adfdc124538dfc3178e113d6a91c336abe113a19eb15813919->enter($__internal_000da59c363a65adfdc124538dfc3178e113d6a91c336abe113a19eb15813919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:logData.html.twig"));

        $__internal_7cf9f05e316a0dee73313fac5bb9040a553af759a459503b0303354b48363830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf9f05e316a0dee73313fac5bb9040a553af759a459503b0303354b48363830->enter($__internal_7cf9f05e316a0dee73313fac5bb9040a553af759a459503b0303354b48363830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:logData.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            if ( !(null === $context["field"])) {
                // line 2
                echo "    <strong>";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["key"]), "html", null, true);
                echo "</strong>: ";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "<br/>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_000da59c363a65adfdc124538dfc3178e113d6a91c336abe113a19eb15813919->leave($__internal_000da59c363a65adfdc124538dfc3178e113d6a91c336abe113a19eb15813919_prof);

        
        $__internal_7cf9f05e316a0dee73313fac5bb9040a553af759a459503b0303354b48363830->leave($__internal_7cf9f05e316a0dee73313fac5bb9040a553af759a459503b0303354b48363830_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:logData.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for key, field in data if field is not null %}
    <strong>{{ key|humanize }}</strong>: {{ field }}<br/>
{% endfor %}
", "SyliusUiBundle:Grid/Field:logData.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Field/logData.html.twig");
    }
}
