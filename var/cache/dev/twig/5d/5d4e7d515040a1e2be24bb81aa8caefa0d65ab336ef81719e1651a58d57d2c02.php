<?php

/* @SyliusAdmin/Taxon/_treeWithButtons.html.twig */
class __TwigTemplate_295077154c5523fed3ef6364d990a1bfa75150997c0fb5fef6a59a296283be90 extends Twig_Template
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
        $__internal_e82c770521818562a9ae229d422d20fb1245bbae68be90bb95fd764e01c28e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82c770521818562a9ae229d422d20fb1245bbae68be90bb95fd764e01c28e63->enter($__internal_e82c770521818562a9ae229d422d20fb1245bbae68be90bb95fd764e01c28e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig"));

        $__internal_ff1d59e5010517510b8124c4e5c9b01e775a8ce92d567e0b76aa86c21bf41737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1d59e5010517510b8124c4e5c9b01e775a8ce92d567e0b76aa86c21bf41737->enter($__internal_ff1d59e5010517510b8124c4e5c9b01e775a8ce92d567e0b76aa86c21bf41737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig", 1);
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
        
        $__internal_e82c770521818562a9ae229d422d20fb1245bbae68be90bb95fd764e01c28e63->leave($__internal_e82c770521818562a9ae229d422d20fb1245bbae68be90bb95fd764e01c28e63_prof);

        
        $__internal_ff1d59e5010517510b8124c4e5c9b01e775a8ce92d567e0b76aa86c21bf41737->leave($__internal_ff1d59e5010517510b8124c4e5c9b01e775a8ce92d567e0b76aa86c21bf41737_prof);

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
            $__internal_7ed684c3cbe270cd5dc1b14edde5cd5dd594806911b5842481639ff0fd9af62c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7ed684c3cbe270cd5dc1b14edde5cd5dd594806911b5842481639ff0fd9af62c->enter($__internal_7ed684c3cbe270cd5dc1b14edde5cd5dd594806911b5842481639ff0fd9af62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render"));

            $__internal_09f79807ca50726c5904d892f0ef98e2e895a7785a7ad71acdb791d32a9b5bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_09f79807ca50726c5904d892f0ef98e2e895a7785a7ad71acdb791d32a9b5bd8->enter($__internal_09f79807ca50726c5904d892f0ef98e2e895a7785a7ad71acdb791d32a9b5bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render"));

            // line 5
            echo "    ";
            $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig", 5);
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
            
            $__internal_09f79807ca50726c5904d892f0ef98e2e895a7785a7ad71acdb791d32a9b5bd8->leave($__internal_09f79807ca50726c5904d892f0ef98e2e895a7785a7ad71acdb791d32a9b5bd8_prof);

            
            $__internal_7ed684c3cbe270cd5dc1b14edde5cd5dd594806911b5842481639ff0fd9af62c->leave($__internal_7ed684c3cbe270cd5dc1b14edde5cd5dd594806911b5842481639ff0fd9af62c_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Taxon/_treeWithButtons.html.twig";
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
", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Taxon\\_treeWithButtons.html.twig");
    }
}
