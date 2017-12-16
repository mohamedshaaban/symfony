<?php

/* SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig */
class __TwigTemplate_a086460f2f63058f5dfda1233a9c6670a31bcfb3d65dfe468affa3742db8eb43 extends Twig_Template
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
        $__internal_65dc893f223a41895c16a1137fccda38ad9c8655da8afa265746085eae74e3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65dc893f223a41895c16a1137fccda38ad9c8655da8afa265746085eae74e3a8->enter($__internal_65dc893f223a41895c16a1137fccda38ad9c8655da8afa265746085eae74e3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig"));

        $__internal_4528bb4f8448291f42b36edb96d74314a5926718bf8597ce3827dcd90087b4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4528bb4f8448291f42b36edb96d74314a5926718bf8597ce3827dcd90087b4c3->enter($__internal_4528bb4f8448291f42b36edb96d74314a5926718bf8597ce3827dcd90087b4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["name"] => $context["attributeType"]) {
            // line 2
            echo "    ";
            $context["createRouteName"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 2, $this->getSourceContext()); })()), "applicationName", array()) . "_admin_") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 2, $this->getSourceContext()); })()), "name", array())) . "_create");
            // line 3
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["createRouteName"]) || array_key_exists("createRouteName", $context) ? $context["createRouteName"] : (function () { throw new Twig_Error_Runtime('Variable "createRouteName" does not exist.', 3, $this->getSourceContext()); })()), array("type" => $context["name"])), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" class=\"item\">
        ";
            // line 4
            $context["label"] = ("sylius.form.attribute_type." . twig_get_attribute($this->env, $this->getSourceContext(), $context["attributeType"], "type", array()));
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 5, $this->getSourceContext()); })())), "html", null, true);
            echo "
    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['attributeType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_65dc893f223a41895c16a1137fccda38ad9c8655da8afa265746085eae74e3a8->leave($__internal_65dc893f223a41895c16a1137fccda38ad9c8655da8afa265746085eae74e3a8_prof);

        
        $__internal_4528bb4f8448291f42b36edb96d74314a5926718bf8597ce3827dcd90087b4c3->leave($__internal_4528bb4f8448291f42b36edb96d74314a5926718bf8597ce3827dcd90087b4c3_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  39 => 4,  32 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for name, attributeType in types %}
    {% set createRouteName = metadata.applicationName~'_admin_'~metadata.name~'_create' %}
    <a href=\"{{ path(createRouteName, { 'type': name }) }}\" id=\"{{ name }}\" class=\"item\">
        {% set label = 'sylius.form.attribute_type.' ~ attributeType.type %}
        {{ label|trans }}
    </a>
{% endfor %}
", "SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\ProductAttribute\\Types\\attributeTypes.html.twig");
    }
}
