<?php

/* SyliusAdminBundle:Order/History:_actions.html.twig */
class __TwigTemplate_fe485da8b083b4648439e126bc06d3b300f1cd5e5a725f17c8cb8d42162853df extends Twig_Template
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
        $__internal_941b67579ca41ca59d8e866f3ee617354558e921848c0add057165d3374414d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941b67579ca41ca59d8e866f3ee617354558e921848c0add057165d3374414d4->enter($__internal_941b67579ca41ca59d8e866f3ee617354558e921848c0add057165d3374414d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_actions.html.twig"));

        $__internal_9ec38a3fdaa19e7bd3dfab96f0402643f744e70e631640d5077e2f7b16495ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec38a3fdaa19e7bd3dfab96f0402643f744e70e631640d5077e2f7b16495ddf->enter($__internal_9ec38a3fdaa19e7bd3dfab96f0402643f744e70e631640d5077e2f7b16495ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_actions.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 1, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"ui labeled icon button\"><i class=\"reply icon\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.return"), "html", null, true);
        echo "</a>
";
        
        $__internal_941b67579ca41ca59d8e866f3ee617354558e921848c0add057165d3374414d4->leave($__internal_941b67579ca41ca59d8e866f3ee617354558e921848c0add057165d3374414d4_prof);

        
        $__internal_9ec38a3fdaa19e7bd3dfab96f0402643f744e70e631640d5077e2f7b16495ddf->leave($__internal_9ec38a3fdaa19e7bd3dfab96f0402643f744e70e631640d5077e2f7b16495ddf_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/History:_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ path('sylius_admin_order_show', {'id': order.id}) }}\" class=\"ui labeled icon button\"><i class=\"reply icon\"></i>{{ 'sylius.ui.return'|trans }}</a>
", "SyliusAdminBundle:Order/History:_actions.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/History/_actions.html.twig");
    }
}
