<?php

/* SyliusAdminBundle:ProductVariant/Grid/Action:updatePositions.html.twig */
class __TwigTemplate_a6d9693910d31b44966ea00fd8a37f05f0ded965819a1975b7fb110d6e14e74d extends Twig_Template
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
        $__internal_8b57c894e1341f5f19a4e058b6e57d008640578b7948ebead9395fe85711453d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b57c894e1341f5f19a4e058b6e57d008640578b7948ebead9395fe85711453d->enter($__internal_8b57c894e1341f5f19a4e058b6e57d008640578b7948ebead9395fe85711453d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Action:updatePositions.html.twig"));

        $__internal_d458b34ffb641b4b6648321d69c0c1c15b53201549e4f8c2303b74042096afab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d458b34ffb641b4b6648321d69c0c1c15b53201549e4f8c2303b74042096afab->enter($__internal_d458b34ffb641b4b6648321d69c0c1c15b53201549e4f8c2303b74042096afab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Action:updatePositions.html.twig"));

        // line 1
        echo "<form class=\"sylius-update-product-variants\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_variants_update_position");
        echo "\" data-csrf-token=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("update-product-variant-position"), "html", null, true);
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
        
        $__internal_8b57c894e1341f5f19a4e058b6e57d008640578b7948ebead9395fe85711453d->leave($__internal_8b57c894e1341f5f19a4e058b6e57d008640578b7948ebead9395fe85711453d_prof);

        
        $__internal_d458b34ffb641b4b6648321d69c0c1c15b53201549e4f8c2303b74042096afab->leave($__internal_d458b34ffb641b4b6648321d69c0c1c15b53201549e4f8c2303b74042096afab_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Grid/Action:updatePositions.html.twig";
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
        return new Twig_Source("<form class=\"sylius-update-product-variants\" action=\"{{ path('sylius_admin_ajax_product_variants_update_position') }}\" data-csrf-token=\"{{ csrf_token('update-product-variant-position') }}\">
    <button class=\"ui labeled loadable icon button sylius-save-position\" type=\"submit\">
        <i class=\"icon checkmark\"></i>
        {{ 'sylius.ui.save_positions'|trans }}
    </button>
</form>
", "SyliusAdminBundle:ProductVariant/Grid/Action:updatePositions.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/Grid/Action/updatePositions.html.twig");
    }
}
