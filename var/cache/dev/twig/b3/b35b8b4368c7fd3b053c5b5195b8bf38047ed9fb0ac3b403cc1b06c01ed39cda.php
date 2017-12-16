<?php

/* @SyliusShop/Product/Index/_pagination.html.twig */
class __TwigTemplate_877278bb2c9d681f9c2a23d46176290e49cb92051051f689e970cca6b294da34 extends Twig_Template
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
        $__internal_39ea26b00c31bffc761cfcbc440a8e66fbb1626a496467d9e5ee8c925e7b835d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ea26b00c31bffc761cfcbc440a8e66fbb1626a496467d9e5ee8c925e7b835d->enter($__internal_39ea26b00c31bffc761cfcbc440a8e66fbb1626a496467d9e5ee8c925e7b835d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_pagination.html.twig"));

        $__internal_32154660d1eff7d28b7e72be98c330764567d7a085d9988771555675c782cb2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32154660d1eff7d28b7e72be98c330764567d7a085d9988771555675c782cb2c->enter($__internal_32154660d1eff7d28b7e72be98c330764567d7a085d9988771555675c782cb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_pagination.html.twig"));

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
        
        $__internal_39ea26b00c31bffc761cfcbc440a8e66fbb1626a496467d9e5ee8c925e7b835d->leave($__internal_39ea26b00c31bffc761cfcbc440a8e66fbb1626a496467d9e5ee8c925e7b835d_prof);

        
        $__internal_32154660d1eff7d28b7e72be98c330764567d7a085d9988771555675c782cb2c->leave($__internal_32154660d1eff7d28b7e72be98c330764567d7a085d9988771555675c782cb2c_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Index/_pagination.html.twig";
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
", "@SyliusShop/Product/Index/_pagination.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Index\\_pagination.html.twig");
    }
}
