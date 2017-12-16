<?php

/* SyliusShopBundle:Taxon:_verticalMenu.html.twig */
class __TwigTemplate_7aeae490212c36f4484c8ed8b47b2a657fa76dfb04973e15438612bd7d93c0bf extends Twig_Template
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
        $__internal_2ed0ba521cc4cc581816c868d379fee06610d1f552490c2e59f4bfb056ded934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed0ba521cc4cc581816c868d379fee06610d1f552490c2e59f4bfb056ded934->enter($__internal_2ed0ba521cc4cc581816c868d379fee06610d1f552490c2e59f4bfb056ded934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_verticalMenu.html.twig"));

        $__internal_209877d616bcc0dc4ae39e1e218f72c73a3529d705fb13946d5de3de7cca0c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209877d616bcc0dc4ae39e1e218f72c73a3529d705fb13946d5de3de7cca0c30->enter($__internal_209877d616bcc0dc4ae39e1e218f72c73a3529d705fb13946d5de3de7cca0c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_verticalMenu.html.twig"));

        // line 1
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_vertical_menu", array("taxon" => (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "

<div class=\"ui fluid vertical menu\">
    <div class=\"header item\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 4, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</div>
    ";
        // line 5
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 5, $this->getSourceContext()); })()), "parent", array())) &&  !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 5, $this->getSourceContext()); })()), "parent", array()), "isRoot", array(), "method"))) {
            // line 6
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 6, $this->getSourceContext()); })()), "parent", array()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 6, $this->getSourceContext()); })()), "parent", array()), "translation", array()), "locale", array()))), "html", null, true);
            echo "\" class=\"item\">
            <i class=\"up arrow icon\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.go_level_up"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 10, $this->getSourceContext()); })()), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 11
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "slug", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "translation", array()), "locale", array()))), "html", null, true);
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "name", array()), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>

";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.after_vertical_menu", array("taxon" => (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 15, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2ed0ba521cc4cc581816c868d379fee06610d1f552490c2e59f4bfb056ded934->leave($__internal_2ed0ba521cc4cc581816c868d379fee06610d1f552490c2e59f4bfb056ded934_prof);

        
        $__internal_209877d616bcc0dc4ae39e1e218f72c73a3529d705fb13946d5de3de7cca0c30->leave($__internal_209877d616bcc0dc4ae39e1e218f72c73a3529d705fb13946d5de3de7cca0c30_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Taxon:_verticalMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  64 => 13,  53 => 11,  48 => 10,  42 => 7,  37 => 6,  35 => 5,  31 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ sonata_block_render_event('sylius.shop.product.index.before_vertical_menu', {'taxon': taxon}) }}

<div class=\"ui fluid vertical menu\">
    <div class=\"header item\">{{ taxon.name }}</div>
    {% if taxon.parent is not empty and not taxon.parent.isRoot() %}
        <a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.parent.slug, '_locale': taxon.parent.translation.locale}) }}\" class=\"item\">
            <i class=\"up arrow icon\"></i> {{ 'sylius.ui.go_level_up'|trans }}
        </a>
    {% endif %}
    {% for child in taxon.children %}
    <a href=\"{{ path('sylius_shop_product_index', {'slug': child.slug, '_locale': child.translation.locale}) }}\" class=\"item\">{{ child.name }}</a>
    {% endfor %}
</div>

{{ sonata_block_render_event('sylius.shop.product.index.after_vertical_menu', {'taxon': taxon}) }}
", "SyliusShopBundle:Taxon:_verticalMenu.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Taxon/_verticalMenu.html.twig");
    }
}
