<?php

/* SyliusAdminBundle:Taxon:_treeWithButtons.html.twig */
class __TwigTemplate_f4e0711bed02b7a44ed2c7f6b92c4bd30bbdf381f12d786437bcd3b75a5d0da1 extends Twig_Template
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
        $__internal_7f8838a74c799b744cdf1ede5d1816d9bdec1ed43637f5f68bf2039ce0ecee1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8838a74c799b744cdf1ede5d1816d9bdec1ed43637f5f68bf2039ce0ecee1b->enter($__internal_7f8838a74c799b744cdf1ede5d1816d9bdec1ed43637f5f68bf2039ce0ecee1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig"));

        $__internal_5cff11d9587534f96cf8df93c926d95ebd64b617e19b094a3b4ef1855fbd8483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cff11d9587534f96cf8df93c926d95ebd64b617e19b094a3b4ef1855fbd8483->enter($__internal_5cff11d9587534f96cf8df93c926d95ebd64b617e19b094a3b4ef1855fbd8483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig", 1);
        // line 2
        $context["tree"] = $this;
        // line 3
        echo "
";
        // line 36
        echo "
<a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_taxon_create");
        echo "\" class=\"ui large fluid labeled icon primary button\">
    <i class=\"plus icon\"></i>
    ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create"), "html", null, true);
        echo "
</a>

<div class=\"ui segment\">
    <div class=\"ui list sylius-sortable-list\">
        ";
        // line 44
        echo $context["tree"]->macro_render((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new Twig_Error_Runtime('Variable "taxons" does not exist.', 44, $this->getSourceContext()); })()));
        echo "
    </div>
</div>
";
        
        $__internal_7f8838a74c799b744cdf1ede5d1816d9bdec1ed43637f5f68bf2039ce0ecee1b->leave($__internal_7f8838a74c799b744cdf1ede5d1816d9bdec1ed43637f5f68bf2039ce0ecee1b_prof);

        
        $__internal_5cff11d9587534f96cf8df93c926d95ebd64b617e19b094a3b4ef1855fbd8483->leave($__internal_5cff11d9587534f96cf8df93c926d95ebd64b617e19b094a3b4ef1855fbd8483_prof);

    }

    // line 4
    public function macro_render($__taxons__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "taxons" => $__taxons__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_35d95cb075778a43e140e33433e98d48ef5bdb2dc0e6b861e701c2264580be67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_35d95cb075778a43e140e33433e98d48ef5bdb2dc0e6b861e701c2264580be67->enter($__internal_35d95cb075778a43e140e33433e98d48ef5bdb2dc0e6b861e701c2264580be67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render"));

            $__internal_d38ba81c304ab1eb2921797f238c5954b1604e44d87302bd9a8996da4ae26a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d38ba81c304ab1eb2921797f238c5954b1604e44d87302bd9a8996da4ae26a6a->enter($__internal_d38ba81c304ab1eb2921797f238c5954b1604e44d87302bd9a8996da4ae26a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render"));

            // line 5
            echo "    ";
            $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig", 5);
            // line 6
            echo "    ";
            $context["tree"] = $this;
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new Twig_Error_Runtime('Variable "taxons" does not exist.', 8, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "id", array()) != null)) {
                    // line 9
                    echo "        <div class=\"item\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "id", array()), "html", null, true);
                    echo "\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_per_taxon_index", array("taxonId" => twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "id", array()))), "html", null, true);
                    echo "\">
                        ";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "name", array()), "html", null, true);
                    echo "
                    </a>
                    <br>
                    <div class=\"ui mini buttons\" style=\"margin-top: 5px;\">
                        ";
                    // line 18
                    echo $context["buttons"]->macro_create($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_taxon_create_for_parent", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "id", array()))), "sylius.ui.add");
                    echo "
                        ";
                    // line 19
                    echo $context["buttons"]->macro_edit($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_taxon_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "id", array()))), null, null, false);
                    echo "
                        ";
                    // line 20
                    echo $context["buttons"]->macro_delete($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_taxon_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "id", array()))), null, false, twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "id", array()));
                    echo "
                        <a class=\"ui icon button sylius-taxon-move-up\" data-url=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_move", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "id", array()))), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "id", array()), "html", null, true);
                    echo "\" data-position=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "position", array()), "html", null, true);
                    echo "\">
                            <i class=\"icon arrow up\"></i>
                        </a>
                        <a class=\"ui icon button sylius-taxon-move-down\" data-url=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_move", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "id", array()))), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "id", array()), "html", null, true);
                    echo "\" data-position=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "position", array()), "html", null, true);
                    echo "\">
                            <i class=\"icon arrow down\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"list\">
                    ";
                    // line 30
                    echo $context["tree"]->macro_render(twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "children", array()));
                    echo "
                </div>
            </div>
        </div>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_d38ba81c304ab1eb2921797f238c5954b1604e44d87302bd9a8996da4ae26a6a->leave($__internal_d38ba81c304ab1eb2921797f238c5954b1604e44d87302bd9a8996da4ae26a6a_prof);

            
            $__internal_35d95cb075778a43e140e33433e98d48ef5bdb2dc0e6b861e701c2264580be67->leave($__internal_35d95cb075778a43e140e33433e98d48ef5bdb2dc0e6b861e701c2264580be67_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 30,  135 => 24,  125 => 21,  121 => 20,  117 => 19,  113 => 18,  106 => 14,  102 => 13,  94 => 9,  89 => 8,  86 => 7,  83 => 6,  80 => 5,  62 => 4,  48 => 44,  40 => 39,  35 => 37,  32 => 36,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
{% import _self as tree %}

{% macro render(taxons) %}
    {% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
    {% import _self as tree %}

    {% for taxon in taxons if taxon.id != null %}
        <div class=\"item\" data-id=\"{{ taxon.id }}\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"{{ path('sylius_admin_product_per_taxon_index', {'taxonId': taxon.id}) }}\">
                        {{ taxon.name }}
                    </a>
                    <br>
                    <div class=\"ui mini buttons\" style=\"margin-top: 5px;\">
                        {{ buttons.create(path('sylius_admin_taxon_create_for_parent', { 'id': taxon.id }), 'sylius.ui.add') }}
                        {{ buttons.edit(path('sylius_admin_taxon_update', { 'id': taxon.id }), null, null, false) }}
                        {{ buttons.delete(path('sylius_admin_taxon_delete', { 'id': taxon.id }), null, false, taxon.id) }}
                        <a class=\"ui icon button sylius-taxon-move-up\" data-url=\"{{ path('sylius_admin_ajax_taxon_move', { id: taxon.id }) }}\" data-id=\"{{ taxon.id }}\" data-position=\"{{ taxon.position }}\">
                            <i class=\"icon arrow up\"></i>
                        </a>
                        <a class=\"ui icon button sylius-taxon-move-down\" data-url=\"{{ path('sylius_admin_ajax_taxon_move', { id: taxon.id }) }}\" data-id=\"{{ taxon.id }}\" data-position=\"{{ taxon.position }}\">
                            <i class=\"icon arrow down\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"list\">
                    {{ tree.render(taxon.children) }}
                </div>
            </div>
        </div>
    {% endfor %}
{% endmacro %}

<a href=\"{{ path('sylius_admin_taxon_create') }}\" class=\"ui large fluid labeled icon primary button\">
    <i class=\"plus icon\"></i>
    {{ 'sylius.ui.create'|trans }}
</a>

<div class=\"ui segment\">
    <div class=\"ui list sylius-sortable-list\">
        {{ tree.render(taxons) }}
    </div>
</div>
", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Taxon/_treeWithButtons.html.twig");
    }
}
