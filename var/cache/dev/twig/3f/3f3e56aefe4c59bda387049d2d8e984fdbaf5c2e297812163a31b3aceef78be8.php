<?php

/* SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig */
class __TwigTemplate_880a4136cd9b4159ba378b0b513391f1c1ed268c13b0ddec438ac0dac9e8446c extends Twig_Template
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
        $__internal_fe2b024c8bf0e5b141888739992f3957f4d12075e401c04f9e81846dbc2064b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe2b024c8bf0e5b141888739992f3957f4d12075e401c04f9e81846dbc2064b5->enter($__internal_fe2b024c8bf0e5b141888739992f3957f4d12075e401c04f9e81846dbc2064b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig"));

        $__internal_13a0c35f8289589e8aec7aa34b1216a0816a9e5156224e17fd9d6f4b2a0fa716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a0c35f8289589e8aec7aa34b1216a0816a9e5156224e17fd9d6f4b2a0fa716->enter($__internal_13a0c35f8289589e8aec7aa34b1216a0816a9e5156224e17fd9d6f4b2a0fa716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig"));

        // line 1
        echo "<div class=\"ui fluid action input\" id=\"attributeChoice\" data-action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_render_attribute_forms");
        echo "\" style=\"margin-bottom: 15px;\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "ui fluid search dropdown", "id" => "sylius_product_attribute_choice")));
        echo "
    <button class=\"ui green labeled icon button\">
        <i class=\"icon plus\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add_attributes"), "html", null, true);
        echo "
    </button>
</div>
";
        
        $__internal_fe2b024c8bf0e5b141888739992f3957f4d12075e401c04f9e81846dbc2064b5->leave($__internal_fe2b024c8bf0e5b141888739992f3957f4d12075e401c04f9e81846dbc2064b5_prof);

        
        $__internal_13a0c35f8289589e8aec7aa34b1216a0816a9e5156224e17fd9d6f4b2a0fa716->leave($__internal_13a0c35f8289589e8aec7aa34b1216a0816a9e5156224e17fd9d6f4b2a0fa716_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui fluid action input\" id=\"attributeChoice\" data-action=\"{{ path('sylius_admin_render_attribute_forms') }}\" style=\"margin-bottom: 15px;\">
    {{ form_widget(form, {'attr': {'class': 'ui fluid search dropdown', 'id': 'sylius_product_attribute_choice'}}) }}
    <button class=\"ui green labeled icon button\">
        <i class=\"icon plus\"></i> {{ 'sylius.ui.add_attributes'|trans }}
    </button>
</div>
", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Attribute/attributeChoice.html.twig");
    }
}
