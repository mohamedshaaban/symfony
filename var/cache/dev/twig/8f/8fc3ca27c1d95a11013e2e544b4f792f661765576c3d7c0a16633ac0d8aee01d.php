<?php

/* @SyliusUi/Macro/sorting.html.twig */
class __TwigTemplate_9fae512c6c7e1113310a0049cec66050ac42e13a43a38f6bdd7f20bf2c486464 extends Twig_Template
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
        $__internal_d08bfefc6db026cdb8ba8d82dab3ec606511c0521f07e578675238189592c21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08bfefc6db026cdb8ba8d82dab3ec606511c0521f07e578675238189592c21d->enter($__internal_d08bfefc6db026cdb8ba8d82dab3ec606511c0521f07e578675238189592c21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/sorting.html.twig"));

        $__internal_3747af35595052968f0e5f7a0492f906094246240ac6f4845194a770ea8c5221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3747af35595052968f0e5f7a0492f906094246240ac6f4845194a770ea8c5221->enter($__internal_3747af35595052968f0e5f7a0492f906094246240ac6f4845194a770ea8c5221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/sorting.html.twig"));

        // line 15
        echo "
";
        
        $__internal_d08bfefc6db026cdb8ba8d82dab3ec606511c0521f07e578675238189592c21d->leave($__internal_d08bfefc6db026cdb8ba8d82dab3ec606511c0521f07e578675238189592c21d_prof);

        
        $__internal_3747af35595052968f0e5f7a0492f906094246240ac6f4845194a770ea8c5221->leave($__internal_3747af35595052968f0e5f7a0492f906094246240ac6f4845194a770ea8c5221_prof);

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
            $__internal_ad2446b7865bcda87ee7d8114d22e4e9ec1d1b59541e64fd46f213a3cd1c0dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ad2446b7865bcda87ee7d8114d22e4e9ec1d1b59541e64fd46f213a3cd1c0dad->enter($__internal_ad2446b7865bcda87ee7d8114d22e4e9ec1d1b59541e64fd46f213a3cd1c0dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tableHeader"));

            $__internal_fe57f986ee4d12720bf7f3347e53fef82fb8a831bce4ceca56064c17b8e6e814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fe57f986ee4d12720bf7f3347e53fef82fb8a831bce4ceca56064c17b8e6e814->enter($__internal_fe57f986ee4d12720bf7f3347e53fef82fb8a831bce4ceca56064c17b8e6e814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tableHeader"));

            // line 2
            echo "    ";
            $context["__internal_1c4e9f8386ed2f782cd1d2adb627e710edbb30b2debf02219442b352ec68bab3"] = $this;
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
                echo $context["__internal_1c4e9f8386ed2f782cd1d2adb627e710edbb30b2debf02219442b352ec68bab3"]->macro_link(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 7, $this->getSourceContext()); })()), "name", array()), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 7, $this->getSourceContext()); })()), ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 7, $this->getSourceContext()); })()) == "desc")) ? ("asc") : ("desc")), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 7, $this->getSourceContext()); })()), "parameters", array()), "all", array()));
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
                echo $context["__internal_1c4e9f8386ed2f782cd1d2adb627e710edbb30b2debf02219442b352ec68bab3"]->macro_link(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 11, $this->getSourceContext()); })()), "name", array()), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 11, $this->getSourceContext()); })()), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 11, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 11, $this->getSourceContext()); })()), "parameters", array()), "all", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 11, $this->getSourceContext()); })()), "label", array())), "html", null, true);
                echo "<i class=\"sort icon\"></i></a>
        </th>
    ";
            }
            
            $__internal_fe57f986ee4d12720bf7f3347e53fef82fb8a831bce4ceca56064c17b8e6e814->leave($__internal_fe57f986ee4d12720bf7f3347e53fef82fb8a831bce4ceca56064c17b8e6e814_prof);

            
            $__internal_ad2446b7865bcda87ee7d8114d22e4e9ec1d1b59541e64fd46f213a3cd1c0dad->leave($__internal_ad2446b7865bcda87ee7d8114d22e4e9ec1d1b59541e64fd46f213a3cd1c0dad_prof);


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
            $__internal_94a609b3efa9ddf95150d4c6a868fe586ebdb85bd9053a514017f4b1a083cdd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_94a609b3efa9ddf95150d4c6a868fe586ebdb85bd9053a514017f4b1a083cdd5->enter($__internal_94a609b3efa9ddf95150d4c6a868fe586ebdb85bd9053a514017f4b1a083cdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link"));

            $__internal_b1cf561545b9629626ec0cd2813a5da8036ffe768d0c45147569367c24d7c42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b1cf561545b9629626ec0cd2813a5da8036ffe768d0c45147569367c24d7c42f->enter($__internal_b1cf561545b9629626ec0cd2813a5da8036ffe768d0c45147569367c24d7c42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link"));

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
            
            $__internal_b1cf561545b9629626ec0cd2813a5da8036ffe768d0c45147569367c24d7c42f->leave($__internal_b1cf561545b9629626ec0cd2813a5da8036ffe768d0c45147569367c24d7c42f_prof);

            
            $__internal_94a609b3efa9ddf95150d4c6a868fe586ebdb85bd9053a514017f4b1a083cdd5->leave($__internal_94a609b3efa9ddf95150d4c6a868fe586ebdb85bd9053a514017f4b1a083cdd5_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/sorting.html.twig";
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
", "@SyliusUi/Macro/sorting.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Macro\\sorting.html.twig");
    }
}
