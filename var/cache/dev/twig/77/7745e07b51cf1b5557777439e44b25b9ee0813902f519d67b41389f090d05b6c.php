<?php

/* SyliusAdminBundle:Product/Grid/Action:updatePositions.html.twig */
class __TwigTemplate_a992f428470d1eac09db6d5abc0df51e2273073074168136e4e3930c11ed9f1b extends Twig_Template
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
        $__internal_6d3f1f7dda936ac6dde0ce8ff6765f4f44d6c9ea335414b7977152b1ed849313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3f1f7dda936ac6dde0ce8ff6765f4f44d6c9ea335414b7977152b1ed849313->enter($__internal_6d3f1f7dda936ac6dde0ce8ff6765f4f44d6c9ea335414b7977152b1ed849313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Action:updatePositions.html.twig"));

        $__internal_cef1bed227ed0fe1194493317a04a8a3beee201f190a038cb74102b0aa291c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef1bed227ed0fe1194493317a04a8a3beee201f190a038cb74102b0aa291c8b->enter($__internal_cef1bed227ed0fe1194493317a04a8a3beee201f190a038cb74102b0aa291c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Action:updatePositions.html.twig"));

        // line 1
        echo "<form class=\"sylius-update-product-taxons\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_taxons_update_position");
        echo "\" data-csrf-token=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("update-product-taxon-position"), "html", null, true);
        echo "\">
    <button class=\"ui labeled loadable icon button sylius-save-position\" type=\"submit\">
        <i class=\"icon checkmark\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.save_positions"), "html", null, true);
        echo "
    </button>
</form>
";
        
        $__internal_6d3f1f7dda936ac6dde0ce8ff6765f4f44d6c9ea335414b7977152b1ed849313->leave($__internal_6d3f1f7dda936ac6dde0ce8ff6765f4f44d6c9ea335414b7977152b1ed849313_prof);

        
        $__internal_cef1bed227ed0fe1194493317a04a8a3beee201f190a038cb74102b0aa291c8b->leave($__internal_cef1bed227ed0fe1194493317a04a8a3beee201f190a038cb74102b0aa291c8b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Grid/Action:updatePositions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"sylius-update-product-taxons\" action=\"{{ path('sylius_admin_ajax_product_taxons_update_position') }}\" data-csrf-token=\"{{ csrf_token('update-product-taxon-position') }}\">
    <button class=\"ui labeled loadable icon button sylius-save-position\" type=\"submit\">
        <i class=\"icon checkmark\"></i>
        {{ 'sylius.ui.save_positions'|trans }}
    </button>
</form>
", "SyliusAdminBundle:Product/Grid/Action:updatePositions.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Grid/Action/updatePositions.html.twig");
    }
}
