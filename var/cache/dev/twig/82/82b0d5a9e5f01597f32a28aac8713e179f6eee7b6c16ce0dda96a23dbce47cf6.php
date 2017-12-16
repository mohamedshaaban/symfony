<?php

/* SyliusShopBundle:Product/Index:_search.html.twig */
class __TwigTemplate_4d594a7b51adb5eeb79f8fc530a196d0a534f90f58ec8b44071e064ac16021e1 extends Twig_Template
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
        $__internal_ddeff1fe39e96a2cce70d994a5e320786f8fcbc569f1489d0b7b32bffb88a172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddeff1fe39e96a2cce70d994a5e320786f8fcbc569f1489d0b7b32bffb88a172->enter($__internal_ddeff1fe39e96a2cce70d994a5e320786f8fcbc569f1489d0b7b32bffb88a172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_search.html.twig"));

        $__internal_2adebe76b6d0985fd432fbe3d5527a2929de86dfb9253208cc69af815cbcf3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2adebe76b6d0985fd432fbe3d5527a2929de86dfb9253208cc69af815cbcf3b3->enter($__internal_2adebe76b6d0985fd432fbe3d5527a2929de86dfb9253208cc69af815cbcf3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_search.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <form method=\"get\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"))), "html", null, true);
        echo "\" class=\"ui loadable form\">
        <div class=\"ui stackable grid\">
            <div class=\"eleven wide column\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 5, $this->getSourceContext()); })()), "definition", array()), "enabledFilters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 6
            echo "                    ";
            echo call_user_func_array($this->env->getFunction('sylius_grid_render_filter')->getCallable(), array((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 6, $this->getSourceContext()); })()), $context["filter"]));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            </div>
            <div class=\"three wide column\">
                <div class=\"ui buttons\">
                    <button type=\"submit\" class=\"ui primary icon labeled button\"><i class=\"search icon\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.search"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"))), "html", null, true);
        echo "\" class=\"ui negative icon labeled button\">
                        <i class=\"cancel icon\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.clear"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
";
        
        $__internal_ddeff1fe39e96a2cce70d994a5e320786f8fcbc569f1489d0b7b32bffb88a172->leave($__internal_ddeff1fe39e96a2cce70d994a5e320786f8fcbc569f1489d0b7b32bffb88a172_prof);

        
        $__internal_2adebe76b6d0985fd432fbe3d5527a2929de86dfb9253208cc69af815cbcf3b3->leave($__internal_2adebe76b6d0985fd432fbe3d5527a2929de86dfb9253208cc69af815cbcf3b3_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Index:_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  56 => 12,  52 => 11,  47 => 8,  38 => 6,  34 => 5,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    <form method=\"get\" action=\"{{ path('sylius_shop_product_index', {'slug': app.request.attributes.get('slug')}) }}\" class=\"ui loadable form\">
        <div class=\"ui stackable grid\">
            <div class=\"eleven wide column\">
                {% for filter in products.definition.enabledFilters %}
                    {{ sylius_grid_render_filter(products, filter) }}
                {% endfor %}
            </div>
            <div class=\"three wide column\">
                <div class=\"ui buttons\">
                    <button type=\"submit\" class=\"ui primary icon labeled button\"><i class=\"search icon\"></i> {{ 'sylius.ui.search'|trans }}</button>
                    <a href=\"{{ path('sylius_shop_product_index', {'slug': app.request.attributes.get('slug')}) }}\" class=\"ui negative icon labeled button\">
                        <i class=\"cancel icon\"></i> {{ 'sylius.ui.clear'|trans }}
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
", "SyliusShopBundle:Product/Index:_search.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Index/_search.html.twig");
    }
}
