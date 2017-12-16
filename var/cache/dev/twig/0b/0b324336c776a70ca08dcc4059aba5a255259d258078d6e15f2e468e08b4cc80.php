<?php

/* SyliusUiBundle:Macro:sorting.html.twig */
class __TwigTemplate_2d00b0742c85c771161fc4920bf8cb68d8bbd4a206bbcd47c0c36011ea567776 extends Twig_Template
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
        $__internal_8191a9bc35ce0b6655211afaf6ad71b7fe1d40a1c512221a97e510ca6ea1e7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8191a9bc35ce0b6655211afaf6ad71b7fe1d40a1c512221a97e510ca6ea1e7cb->enter($__internal_8191a9bc35ce0b6655211afaf6ad71b7fe1d40a1c512221a97e510ca6ea1e7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:sorting.html.twig"));

        $__internal_f51fced27184b6ee08b0af7d9b5dbb3a7dc70b99bb8523624df07eddc74d01c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51fced27184b6ee08b0af7d9b5dbb3a7dc70b99bb8523624df07eddc74d01c0->enter($__internal_f51fced27184b6ee08b0af7d9b5dbb3a7dc70b99bb8523624df07eddc74d01c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:sorting.html.twig"));

        // line 15
        echo "
";
        
        $__internal_8191a9bc35ce0b6655211afaf6ad71b7fe1d40a1c512221a97e510ca6ea1e7cb->leave($__internal_8191a9bc35ce0b6655211afaf6ad71b7fe1d40a1c512221a97e510ca6ea1e7cb_prof);

        
        $__internal_f51fced27184b6ee08b0af7d9b5dbb3a7dc70b99bb8523624df07eddc74d01c0->leave($__internal_f51fced27184b6ee08b0af7d9b5dbb3a7dc70b99bb8523624df07eddc74d01c0_prof);

    }

    // line 1
    public function macro_tableHeader($__grid__ = null, $__field__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "grid" => $__grid__,
            "field" => $__field__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_02aaa6ed80ef2f05e19cadcf3648cba7e12cb7908768016c5c38b10307f28b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_02aaa6ed80ef2f05e19cadcf3648cba7e12cb7908768016c5c38b10307f28b01->enter($__internal_02aaa6ed80ef2f05e19cadcf3648cba7e12cb7908768016c5c38b10307f28b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tableHeader"));

            $__internal_f65974213d93e6656b4b2d95d66af0074cdeb228ff6f0e17bb4728c942eca339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f65974213d93e6656b4b2d95d66af0074cdeb228ff6f0e17bb4728c942eca339->enter($__internal_f65974213d93e6656b4b2d95d66af0074cdeb228ff6f0e17bb4728c942eca339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tableHeader"));

            // line 2
            echo "    ";
            $context["__internal_9c4f466f5ac75d6e8e4a9b1182509c9b914f985281817aa339ff4eb8be932b4e"] = $this;
            // line 3
            echo "    ";
            $context["order"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 3, $this->getSourceContext()); })()), "getSortingOrder", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 3, $this->getSourceContext()); })()), "name", array())), "method");
            // line 4
            echo "
    ";
            // line 5
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 5, $this->getSourceContext()); })()), "isSortedBy", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 5, $this->getSourceContext()); })()), "name", array())), "method")) {
                // line 6
                echo "        <th class=\"sortable sorted ";
                echo ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()) == "desc")) ? ("descending") : ("ascending"));
                echo " sylius-table-column-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), "html", null, true);
                echo "\">
            <a href=\"";
                // line 7
                echo $context["__internal_9c4f466f5ac75d6e8e4a9b1182509c9b914f985281817aa339ff4eb8be932b4e"]->macro_link(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 7, $this->getSourceContext()); })()), "name", array()), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 7, $this->getSourceContext()); })()), ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 7, $this->getSourceContext()); })()) == "desc")) ? ("asc") : ("desc")), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 7, $this->getSourceContext()); })()), "parameters", array()), "all", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 7, $this->getSourceContext()); })()), "label", array())), "html", null, true);
                echo "</a>
        </th>
    ";
            } else {
                // line 10
                echo "        <th class=\"sortable sylius-table-column-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 10, $this->getSourceContext()); })()), "name", array()), "html", null, true);
                echo "\">
            <a href=\"";
                // line 11
                echo $context["__internal_9c4f466f5ac75d6e8e4a9b1182509c9b914f985281817aa339ff4eb8be932b4e"]->macro_link(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 11, $this->getSourceContext()); })()), "name", array()), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 11, $this->getSourceContext()); })()), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 11, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 11, $this->getSourceContext()); })()), "parameters", array()), "all", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 11, $this->getSourceContext()); })()), "label", array())), "html", null, true);
                echo "<i class=\"sort icon\"></i></a>
        </th>
    ";
            }
            
            $__internal_f65974213d93e6656b4b2d95d66af0074cdeb228ff6f0e17bb4728c942eca339->leave($__internal_f65974213d93e6656b4b2d95d66af0074cdeb228ff6f0e17bb4728c942eca339_prof);

            
            $__internal_02aaa6ed80ef2f05e19cadcf3648cba7e12cb7908768016c5c38b10307f28b01->leave($__internal_02aaa6ed80ef2f05e19cadcf3648cba7e12cb7908768016c5c38b10307f28b01_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 16
    public function macro_link($__fieldName__ = null, $__attributes__ = null, $__order__ = null, $__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldName" => $__fieldName__,
            "attributes" => $__attributes__,
            "order" => $__order__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c6e7f531f33348c2921d541dfef68ceb8b008b05f717c3def988bf858fb92b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c6e7f531f33348c2921d541dfef68ceb8b008b05f717c3def988bf858fb92b9f->enter($__internal_c6e7f531f33348c2921d541dfef68ceb8b008b05f717c3def988bf858fb92b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link"));

            $__internal_706a0cb6a630ceb9b27e331d4330edf53472e985cad914899005c3c8ba5342f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_706a0cb6a630ceb9b27e331d4330edf53472e985cad914899005c3c8ba5342f1->enter($__internal_706a0cb6a630ceb9b27e331d4330edf53472e985cad914899005c3c8ba5342f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link"));

            // line 17
            echo "    ";
            $context["params"] = twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 17, $this->getSourceContext()); })()), "get", array(0 => "_route_params"), "method"), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 17, $this->getSourceContext()); })()));
            // line 18
            echo "    ";
            $context["sorting"] = array("sorting" => array((isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new Twig_Error_Runtime('Variable "fieldName" does not exist.', 18, $this->getSourceContext()); })()) => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 18, $this->getSourceContext()); })())));
            // line 19
            echo "
    ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 20, $this->getSourceContext()); })()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new Twig_Error_Runtime('Variable "params" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["sorting"]) || array_key_exists("sorting", $context) ? $context["sorting"] : (function () { throw new Twig_Error_Runtime('Variable "sorting" does not exist.', 20, $this->getSourceContext()); })())), array("page" => 1))), "html", null, true);
            echo "
";
            
            $__internal_706a0cb6a630ceb9b27e331d4330edf53472e985cad914899005c3c8ba5342f1->leave($__internal_706a0cb6a630ceb9b27e331d4330edf53472e985cad914899005c3c8ba5342f1_prof);

            
            $__internal_c6e7f531f33348c2921d541dfef68ceb8b008b05f717c3def988bf858fb92b9f->leave($__internal_c6e7f531f33348c2921d541dfef68ceb8b008b05f717c3def988bf858fb92b9f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 20,  135 => 19,  132 => 18,  129 => 17,  108 => 16,  87 => 11,  82 => 10,  74 => 7,  67 => 6,  65 => 5,  62 => 4,  59 => 3,  56 => 2,  36 => 1,  25 => 15,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro tableHeader(grid, field, attributes) %}
    {% from _self import link %}
    {% set order = grid.getSortingOrder(field.name) %}

    {% if grid.isSortedBy(field.name) %}
        <th class=\"sortable sorted {{ order == 'desc' ? 'descending' : 'ascending' }} sylius-table-column-{{ field.name }}\">
            <a href=\"{{ link(field.name, attributes, (order == 'desc' ? 'asc' : 'desc'), grid.parameters.all) }}\">{{ field.label|trans }}</a>
        </th>
    {% else %}
        <th class=\"sortable sylius-table-column-{{ field.name }}\">
            <a href=\"{{ link(field.name, attributes, order, grid.parameters.all) }}\">{{ field.label|trans }}<i class=\"sort icon\"></i></a>
        </th>
    {% endif %}
{% endmacro %}

{% macro link(fieldName, attributes, order, parameters) %}
    {% set params = attributes.get('_route_params')|merge(parameters) %}
    {% set sorting = {'sorting': {(fieldName): (order)}} %}

    {{ path(attributes.get('_route'), params|merge(sorting)|merge({'page': 1})) }}
{% endmacro %}
", "SyliusUiBundle:Macro:sorting.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/sorting.html.twig");
    }
}
