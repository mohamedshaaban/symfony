<?php

/* SyliusAdminBundle::_search.html.twig */
class __TwigTemplate_b8e4bd7f44090fbe2a17e64fa7544e0488fb008de787d98f7808a9f27119212d extends Twig_Template
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
        $__internal_ee5460f9ba62859317462edd4bf66ffc5660ba26172a0411ca138f5fb64ac1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5460f9ba62859317462edd4bf66ffc5660ba26172a0411ca138f5fb64ac1ec->enter($__internal_ee5460f9ba62859317462edd4bf66ffc5660ba26172a0411ca138f5fb64ac1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_search.html.twig"));

        $__internal_831c355952a32f50dcf661393a808356a48e23c450e884cbf9b26072b0050077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831c355952a32f50dcf661393a808356a48e23c450e884cbf9b26072b0050077->enter($__internal_831c355952a32f50dcf661393a808356a48e23c450e884cbf9b26072b0050077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_search.html.twig"));

        // line 1
        echo "<div class=\"item\">
    <form method=\"get\" action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index");
        echo "\">
        <div class=\"ui inverted transparent icon input\">
            <input type=\"text\" name=\"criteria[search][value]\" placeholder=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.search_products"), "html", null, true);
        echo "...\">
            <i class=\"search link icon\"></i>
        </div>
    </form>
</div>
";
        
        $__internal_ee5460f9ba62859317462edd4bf66ffc5660ba26172a0411ca138f5fb64ac1ec->leave($__internal_ee5460f9ba62859317462edd4bf66ffc5660ba26172a0411ca138f5fb64ac1ec_prof);

        
        $__internal_831c355952a32f50dcf661393a808356a48e23c450e884cbf9b26072b0050077->leave($__internal_831c355952a32f50dcf661393a808356a48e23c450e884cbf9b26072b0050077_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle::_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"item\">
    <form method=\"get\" action=\"{{ path('sylius_admin_product_index') }}\">
        <div class=\"ui inverted transparent icon input\">
            <input type=\"text\" name=\"criteria[search][value]\" placeholder=\"{{ 'sylius.ui.search_products'|trans }}...\">
            <i class=\"search link icon\"></i>
        </div>
    </form>
</div>
", "SyliusAdminBundle::_search.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/_search.html.twig");
    }
}
