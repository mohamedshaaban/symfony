<?php

/* @SyliusAdmin/Product/Tab/_taxonomy.html.twig */
class __TwigTemplate_3ed16d9156e2f8c988658a8727f00fb4ca14db84c267b157c9506826f754e310 extends Twig_Template
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
        $__internal_820299533831e8b856c21daece3e5f1f352dee8189502484511bce182ce8d37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_820299533831e8b856c21daece3e5f1f352dee8189502484511bce182ce8d37a->enter($__internal_820299533831e8b856c21daece3e5f1f352dee8189502484511bce182ce8d37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_taxonomy.html.twig"));

        $__internal_f675599bee3c4cc904d22aab74ade152c53627b32f95c1fc3a2c665212ca8041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f675599bee3c4cc904d22aab74ade152c53627b32f95c1fc3a2c665212ca8041->enter($__internal_f675599bee3c4cc904d22aab74ade152c53627b32f95c1fc3a2c665212ca8041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_taxonomy.html.twig"));

        // line 1
        echo "<div class=\"ui tab\" data-tab=\"taxonomy\">
    <h3 class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.taxonomy"), "html", null, true);
        echo "</h3>
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "mainTaxon", array()), 'row');
        echo "

    <h4>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.product_taxon"), "html", null, true);
        echo "</h4>
    <div id=\"sylius-product-taxonomy-tree\"
         data-taxon-root-nodes-url=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_root_nodes");
        echo "\"
         data-taxon-leafs-url=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_leafs");
        echo "\"
    >
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "productTaxons", array()), 'widget');
        echo "
        <div class=\"ui inverted dimmer\">
            <div class=\"ui loader\"></div>
        </div>
    </div>

    ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 16, $this->getSourceContext()); })())) . ".tab_taxonomy"), array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()))));
        echo "
</div>
";
        
        $__internal_820299533831e8b856c21daece3e5f1f352dee8189502484511bce182ce8d37a->leave($__internal_820299533831e8b856c21daece3e5f1f352dee8189502484511bce182ce8d37a_prof);

        
        $__internal_f675599bee3c4cc904d22aab74ade152c53627b32f95c1fc3a2c665212ca8041->leave($__internal_f675599bee3c4cc904d22aab74ade152c53627b32f95c1fc3a2c665212ca8041_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Tab/_taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  51 => 10,  46 => 8,  42 => 7,  37 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui tab\" data-tab=\"taxonomy\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.taxonomy'|trans }}</h3>
    {{ form_row(form.mainTaxon) }}

    <h4>{{ 'sylius.ui.product_taxon'|trans }}</h4>
    <div id=\"sylius-product-taxonomy-tree\"
         data-taxon-root-nodes-url=\"{{ path('sylius_admin_ajax_taxon_root_nodes') }}\"
         data-taxon-leafs-url=\"{{ path('sylius_admin_ajax_taxon_leafs') }}\"
    >
        {{ form_widget(form.productTaxons) }}
        <div class=\"ui inverted dimmer\">
            <div class=\"ui loader\"></div>
        </div>
    </div>

    {{ sonata_block_render_event('sylius.admin.product.' ~ action ~ '.tab_taxonomy', {'form': form}) }}
</div>
", "@SyliusAdmin/Product/Tab/_taxonomy.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Product\\Tab\\_taxonomy.html.twig");
    }
}
