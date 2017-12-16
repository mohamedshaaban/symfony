<?php

/* SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig */
class __TwigTemplate_b9c4f7db3af0fe144152eec12415e84642cd3151e4435936477dd85ce5177007 extends Twig_Template
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
        $__internal_2ff1353f7892565e2d97555c221f0cd20b5f8826d537014dd17c1c0aaafb1c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff1353f7892565e2d97555c221f0cd20b5f8826d537014dd17c1c0aaafb1c9e->enter($__internal_2ff1353f7892565e2d97555c221f0cd20b5f8826d537014dd17c1c0aaafb1c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig"));

        $__internal_1a231e87db888687e4f5eeaae77837402df0c2083f36d9519452ffa6c3767f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a231e87db888687e4f5eeaae77837402df0c2083f36d9519452ffa6c3767f12->enter($__internal_1a231e87db888687e4f5eeaae77837402df0c2083f36d9519452ffa6c3767f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig"));

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
        
        $__internal_2ff1353f7892565e2d97555c221f0cd20b5f8826d537014dd17c1c0aaafb1c9e->leave($__internal_2ff1353f7892565e2d97555c221f0cd20b5f8826d537014dd17c1c0aaafb1c9e_prof);

        
        $__internal_1a231e87db888687e4f5eeaae77837402df0c2083f36d9519452ffa6c3767f12->leave($__internal_1a231e87db888687e4f5eeaae77837402df0c2083f36d9519452ffa6c3767f12_prof);

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
", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Product\\Attribute\\attributeChoice.html.twig");
    }
}
