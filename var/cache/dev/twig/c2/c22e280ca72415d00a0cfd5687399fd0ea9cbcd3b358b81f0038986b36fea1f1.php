<?php

/* SyliusAdminBundle:Order/Update:_actions.html.twig */
class __TwigTemplate_6dc2708245d61867b2735b0c9cd115adb319a9f399a8a04a700fea2f4c1024c7 extends Twig_Template
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
        $__internal_4b5bc9e6e76bdd1c9f726e828b8be0b9e7c67e67f2cedaf43ef9aecb98f502dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5bc9e6e76bdd1c9f726e828b8be0b9e7c67e67f2cedaf43ef9aecb98f502dc->enter($__internal_4b5bc9e6e76bdd1c9f726e828b8be0b9e7c67e67f2cedaf43ef9aecb98f502dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Update:_actions.html.twig"));

        $__internal_e8fe92ce87d2053912e964663c474a81f95356b850d71c9f30b36b688c2dc512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fe92ce87d2053912e964663c474a81f95356b850d71c9f30b36b688c2dc512->enter($__internal_e8fe92ce87d2053912e964663c474a81f95356b850d71c9f30b36b688c2dc512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Update:_actions.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 1, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"ui labeled icon button\"><i class=\"reply icon\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.return"), "html", null, true);
        echo "</a>
";
        
        $__internal_4b5bc9e6e76bdd1c9f726e828b8be0b9e7c67e67f2cedaf43ef9aecb98f502dc->leave($__internal_4b5bc9e6e76bdd1c9f726e828b8be0b9e7c67e67f2cedaf43ef9aecb98f502dc_prof);

        
        $__internal_e8fe92ce87d2053912e964663c474a81f95356b850d71c9f30b36b688c2dc512->leave($__internal_e8fe92ce87d2053912e964663c474a81f95356b850d71c9f30b36b688c2dc512_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Update:_actions.html.twig";
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
", "SyliusAdminBundle:Order/Update:_actions.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Update/_actions.html.twig");
    }
}
