<?php

/* @SyliusAdmin/Taxon/_treeWithoutButtons.html.twig */
class __TwigTemplate_8accadf5a7045fd568aa8bdaa226e59068c713d1b3ab8678b27b349d74283eec extends Twig_Template
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
        $__internal_6b9add3a61dcb4e4606ec05ac5a23aa967bfa1088a9015d76598177246e80fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9add3a61dcb4e4606ec05ac5a23aa967bfa1088a9015d76598177246e80fe5->enter($__internal_6b9add3a61dcb4e4606ec05ac5a23aa967bfa1088a9015d76598177246e80fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig"));

        $__internal_214b4f9a3ed348576e68e182ffb68181cc4b7617ef65164b4d91a328110c5992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214b4f9a3ed348576e68e182ffb68181cc4b7617ef65164b4d91a328110c5992->enter($__internal_214b4f9a3ed348576e68e182ffb68181cc4b7617ef65164b4d91a328110c5992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig"));

        // line 1
        $context["tree"] = $this;
        // line 2
        echo "
";
        // line 22
        echo "
<div class=\"ui large fluid vertical buttons\">
    <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index");
        echo "\" class=\"ui primary labeled icon button\">
        <i class=\"search icon\"></i>
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.browse_all_products"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_taxon_create");
        echo "\" class=\"ui labeled icon button\">
        <i class=\"sitemap icon\"></i>
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.manage_taxons"), "html", null, true);
        echo "
    </a>
</div>

<div class=\"ui segment\">
    <div class=\"ui list\">
        ";
        // line 36
        echo $context["tree"]->macro_render((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new Twig_Error_Runtime('Variable "taxons" does not exist.', 36, $this->getSourceContext()); })()));
        echo "
    </div>
</div>
";
        
        $__internal_6b9add3a61dcb4e4606ec05ac5a23aa967bfa1088a9015d76598177246e80fe5->leave($__internal_6b9add3a61dcb4e4606ec05ac5a23aa967bfa1088a9015d76598177246e80fe5_prof);

        
        $__internal_214b4f9a3ed348576e68e182ffb68181cc4b7617ef65164b4d91a328110c5992->leave($__internal_214b4f9a3ed348576e68e182ffb68181cc4b7617ef65164b4d91a328110c5992_prof);

    }

    // line 3
    public function macro_render($__taxons__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "taxons" => $__taxons__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_73809f892cc92542dd587d0f6fb214ff7e69adeb8fd138e65cfb33a92a6698c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_73809f892cc92542dd587d0f6fb214ff7e69adeb8fd138e65cfb33a92a6698c6->enter($__internal_73809f892cc92542dd587d0f6fb214ff7e69adeb8fd138e65cfb33a92a6698c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render"));

            $__internal_81e81d20d6e4c4592c5d2fece90af7df76e2e892bd695fb4c3396f330773a696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_81e81d20d6e4c4592c5d2fece90af7df76e2e892bd695fb4c3396f330773a696->enter($__internal_81e81d20d6e4c4592c5d2fece90af7df76e2e892bd695fb4c3396f330773a696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render"));

            // line 4
            echo "    ";
            $context["tree"] = $this;
            // line 5
            echo "
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new Twig_Error_Runtime('Variable "taxons" does not exist.', 6, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 7
                echo "        <div class=\"item\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_per_taxon_index", array("taxonId" => twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "name", array()), "html", null, true);
                echo "
                    </a>
                </div>
                <div class=\"list\">
                    ";
                // line 16
                echo $context["tree"]->macro_render(twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "children", array()));
                echo "
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_81e81d20d6e4c4592c5d2fece90af7df76e2e892bd695fb4c3396f330773a696->leave($__internal_81e81d20d6e4c4592c5d2fece90af7df76e2e892bd695fb4c3396f330773a696_prof);

            
            $__internal_73809f892cc92542dd587d0f6fb214ff7e69adeb8fd138e65cfb33a92a6698c6->leave($__internal_73809f892cc92542dd587d0f6fb214ff7e69adeb8fd138e65cfb33a92a6698c6_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 16,  110 => 12,  106 => 11,  100 => 7,  96 => 6,  93 => 5,  90 => 4,  72 => 3,  58 => 36,  49 => 30,  44 => 28,  39 => 26,  34 => 24,  30 => 22,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as tree %}

{% macro render(taxons) %}
    {% import _self as tree %}

    {% for taxon in taxons %}
        <div class=\"item\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"{{ path('sylius_admin_product_per_taxon_index', {'taxonId': taxon.id}) }}\">
                        {{ taxon.name }}
                    </a>
                </div>
                <div class=\"list\">
                    {{ tree.render(taxon.children) }}
                </div>
            </div>
        </div>
    {% endfor %}
{% endmacro %}

<div class=\"ui large fluid vertical buttons\">
    <a href=\"{{ path('sylius_admin_product_index') }}\" class=\"ui primary labeled icon button\">
        <i class=\"search icon\"></i>
        {{ 'sylius.ui.browse_all_products'|trans }}
    </a>
    <a href=\"{{ path('sylius_admin_taxon_create') }}\" class=\"ui labeled icon button\">
        <i class=\"sitemap icon\"></i>
        {{ 'sylius.ui.manage_taxons'|trans }}
    </a>
</div>

<div class=\"ui segment\">
    <div class=\"ui list\">
        {{ tree.render(taxons) }}
    </div>
</div>
", "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Taxon\\_treeWithoutButtons.html.twig");
    }
}
