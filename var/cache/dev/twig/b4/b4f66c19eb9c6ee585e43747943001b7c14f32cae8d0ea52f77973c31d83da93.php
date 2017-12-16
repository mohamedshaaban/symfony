<?php

/* SyliusShopBundle:Product/Index:_pagination.html.twig */
class __TwigTemplate_10007b4de2f9f40f4cbcc6ccf28bac665c84349fdcbb2b2ea74e9eca90d54ff8 extends Twig_Template
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
        $__internal_73db5e19097fb5d4f4434dd43934f155a939a8484c6cc1ac3ff277282a92c765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73db5e19097fb5d4f4434dd43934f155a939a8484c6cc1ac3ff277282a92c765->enter($__internal_73db5e19097fb5d4f4434dd43934f155a939a8484c6cc1ac3ff277282a92c765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_pagination.html.twig"));

        $__internal_2dc1eb1a5234f763007c9e58c682215250c9f00640ad490eef87800ef4595671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc1eb1a5234f763007c9e58c682215250c9f00640ad490eef87800ef4595671->enter($__internal_2dc1eb1a5234f763007c9e58c682215250c9f00640ad490eef87800ef4595671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_pagination.html.twig"));

        // line 1
        $context["paginationLimits"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 1, $this->getSourceContext()); })()), "definition", array()), "limits", array());
        // line 2
        echo "
<div class=\"ui right floated small header\">
    <div class=\"content\">
        <div class=\"ui inline dropdown sylius-paginate\">
            ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.show"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 6, $this->getSourceContext()); })()), "data", array()), "maxPerPage", array()), "html", null, true);
        echo "
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationLimits"]) || array_key_exists("paginationLimits", $context) ? $context["paginationLimits"] : (function () { throw new Twig_Error_Runtime('Variable "paginationLimits" does not exist.', 9, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            if (($context["limit"] != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 9, $this->getSourceContext()); })()), "data", array()), "maxPerPage", array()))) {
                // line 10
                echo "                ";
                $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "query", array()), "all", array())), array("limit" => $context["limit"])));
                // line 11
                echo "                <a class=\"item\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
                echo "</a>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_73db5e19097fb5d4f4434dd43934f155a939a8484c6cc1ac3ff277282a92c765->leave($__internal_73db5e19097fb5d4f4434dd43934f155a939a8484c6cc1ac3ff277282a92c765_prof);

        
        $__internal_2dc1eb1a5234f763007c9e58c682215250c9f00640ad490eef87800ef4595671->leave($__internal_2dc1eb1a5234f763007c9e58c682215250c9f00640ad490eef87800ef4595671_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Index:_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  49 => 11,  46 => 10,  41 => 9,  33 => 6,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set paginationLimits = (resources.definition.limits) %}

<div class=\"ui right floated small header\">
    <div class=\"content\">
        <div class=\"ui inline dropdown sylius-paginate\">
            {{ 'sylius.ui.show'|trans }} {{ resources.data.maxPerPage }}
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
            {% for limit in paginationLimits if limit != resources.data.maxPerPage %}
                {% set path = path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all)|merge({'limit': limit})) %}
                <a class=\"item\" href=\"{{ path }}\">{{ limit }}</a>
            {% endfor %}
            </div>
        </div>
    </div>
</div>
", "SyliusShopBundle:Product/Index:_pagination.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Index/_pagination.html.twig");
    }
}
