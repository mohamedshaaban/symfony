<?php

/* SyliusUiBundle:Macro:pagination.html.twig */
class __TwigTemplate_44d23febb19bccabc0652ddac3997ec459c76eec7ca3dd139167cd0f6c319c94 extends Twig_Template
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
        $__internal_0c04fab6ba587086b32df48861f6a7a8589036b41390d1631ebe3c2d118be774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c04fab6ba587086b32df48861f6a7a8589036b41390d1631ebe3c2d118be774->enter($__internal_0c04fab6ba587086b32df48861f6a7a8589036b41390d1631ebe3c2d118be774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:pagination.html.twig"));

        $__internal_eac8131704a2bd6a56864ed654b20d0d3ea62ac84232c219580fac6ca2f9c966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac8131704a2bd6a56864ed654b20d0d3ea62ac84232c219580fac6ca2f9c966->enter($__internal_eac8131704a2bd6a56864ed654b20d0d3ea62ac84232c219580fac6ca2f9c966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:pagination.html.twig"));

        // line 6
        echo "
";
        
        $__internal_0c04fab6ba587086b32df48861f6a7a8589036b41390d1631ebe3c2d118be774->leave($__internal_0c04fab6ba587086b32df48861f6a7a8589036b41390d1631ebe3c2d118be774_prof);

        
        $__internal_eac8131704a2bd6a56864ed654b20d0d3ea62ac84232c219580fac6ca2f9c966->leave($__internal_eac8131704a2bd6a56864ed654b20d0d3ea62ac84232c219580fac6ca2f9c966_prof);

    }

    // line 1
    public function macro_simple($__paginator__ = null, $__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c1eea572223fc8032eb20a5949403b62d500f96dcf4f71c02408a54b568409bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c1eea572223fc8032eb20a5949403b62d500f96dcf4f71c02408a54b568409bb->enter($__internal_c1eea572223fc8032eb20a5949403b62d500f96dcf4f71c02408a54b568409bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "simple"));

            $__internal_e03163a0ed9a5ce50a28053a74071d392be44c8a4d8e5e795ef1635f584948c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e03163a0ed9a5ce50a28053a74071d392be44c8a4d8e5e795ef1635f584948c6->enter($__internal_e03163a0ed9a5ce50a28053a74071d392be44c8a4d8e5e795ef1635f584948c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "simple"));

            // line 2
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 2, $this->getSourceContext()); })()), "haveToPaginate", array(), "method")) {
                // line 3
                echo "        ";
                echo $this->env->getExtension('WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension')->renderPagerfanta((isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 3, $this->getSourceContext()); })()), "semantic_ui_translated", ((array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 3, $this->getSourceContext()); })()), array())) : (array())));
                echo "
    ";
            }
            
            $__internal_e03163a0ed9a5ce50a28053a74071d392be44c8a4d8e5e795ef1635f584948c6->leave($__internal_e03163a0ed9a5ce50a28053a74071d392be44c8a4d8e5e795ef1635f584948c6_prof);

            
            $__internal_c1eea572223fc8032eb20a5949403b62d500f96dcf4f71c02408a54b568409bb->leave($__internal_c1eea572223fc8032eb20a5949403b62d500f96dcf4f71c02408a54b568409bb_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 7
    public function macro_perPage($__paginator__ = null, $__paginationLimits__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "paginationLimits" => $__paginationLimits__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_17aa55c832775869a097851c730d498ac55a9d2d53aa7403692b0b2e7da0951c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_17aa55c832775869a097851c730d498ac55a9d2d53aa7403692b0b2e7da0951c->enter($__internal_17aa55c832775869a097851c730d498ac55a9d2d53aa7403692b0b2e7da0951c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "perPage"));

            $__internal_4fe880776420f445242db74e0059e50bc334ac86b2832f58f2c1f5c7bc7ee870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_4fe880776420f445242db74e0059e50bc334ac86b2832f58f2c1f5c7bc7ee870->enter($__internal_4fe880776420f445242db74e0059e50bc334ac86b2832f58f2c1f5c7bc7ee870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "perPage"));

            // line 8
            echo "    <div class=\"ui simple fluid dropdown item\">
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.show"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 9, $this->getSourceContext()); })()), "maxPerPage", array()), "html", null, true);
            echo "
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paginationLimits"]) || array_key_exists("paginationLimits", $context) ? $context["paginationLimits"] : (function () { throw new Twig_Error_Runtime('Variable "paginationLimits" does not exist.', 12, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                if (($context["limit"] != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 12, $this->getSourceContext()); })()), "maxPerPage", array()))) {
                    // line 13
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "request", array()), "query", array())), array("limit" => $context["limit"])));
                    // line 14
                    echo "            <a class=\"item\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
                    echo "</a>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </div>
    </div>
";
            
            $__internal_4fe880776420f445242db74e0059e50bc334ac86b2832f58f2c1f5c7bc7ee870->leave($__internal_4fe880776420f445242db74e0059e50bc334ac86b2832f58f2c1f5c7bc7ee870_prof);

            
            $__internal_17aa55c832775869a097851c730d498ac55a9d2d53aa7403692b0b2e7da0951c->leave($__internal_17aa55c832775869a097851c730d498ac55a9d2d53aa7403692b0b2e7da0951c_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 16,  115 => 14,  112 => 13,  107 => 12,  99 => 9,  96 => 8,  77 => 7,  58 => 3,  55 => 2,  36 => 1,  25 => 6,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro simple(paginator, options) %}
    {% if paginator.haveToPaginate() %}
        {{ pagerfanta(paginator, 'semantic_ui_translated', options|default({})) }}
    {% endif %}
{% endmacro %}

{% macro perPage(paginator, paginationLimits) %}
    <div class=\"ui simple fluid dropdown item\">
        {{ 'sylius.ui.show'|trans }} {{ paginator.maxPerPage }}
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
        {% for limit in paginationLimits if limit != paginator.maxPerPage %}
            {% set path = path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query)|merge({'limit': limit})) %}
            <a class=\"item\" href=\"{{ path }}\">{{ limit }}</a>
        {% endfor %}
        </div>
    </div>
{% endmacro %}
", "SyliusUiBundle:Macro:pagination.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/pagination.html.twig");
    }
}
