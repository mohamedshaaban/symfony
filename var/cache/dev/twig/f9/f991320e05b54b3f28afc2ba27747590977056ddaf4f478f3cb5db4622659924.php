<?php

/* @SyliusAdmin/Form/imagesTheme.html.twig */
class __TwigTemplate_805ccd2d63dbd4c361d7b7c55ded02ee04dc50447826485b2fbf389196510170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Form/imagesTheme.html.twig", "@SyliusAdmin/Form/imagesTheme.html.twig", 1);
        $this->blocks = array(
            'sylius_product_image_widget' => array($this, 'block_sylius_product_image_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Form/imagesTheme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9c68dbfa20af1ff91034bd1727473081d61af7459d4f4d97e870f04654f534b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c68dbfa20af1ff91034bd1727473081d61af7459d4f4d97e870f04654f534b->enter($__internal_d9c68dbfa20af1ff91034bd1727473081d61af7459d4f4d97e870f04654f534b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Form/imagesTheme.html.twig"));

        $__internal_7ae1447f74cce3c9b3872e28723ab7759767eb6566b9dea0f6ae800eb43fb449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae1447f74cce3c9b3872e28723ab7759767eb6566b9dea0f6ae800eb43fb449->enter($__internal_7ae1447f74cce3c9b3872e28723ab7759767eb6566b9dea0f6ae800eb43fb449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Form/imagesTheme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9c68dbfa20af1ff91034bd1727473081d61af7459d4f4d97e870f04654f534b->leave($__internal_d9c68dbfa20af1ff91034bd1727473081d61af7459d4f4d97e870f04654f534b_prof);

        
        $__internal_7ae1447f74cce3c9b3872e28723ab7759767eb6566b9dea0f6ae800eb43fb449->leave($__internal_7ae1447f74cce3c9b3872e28723ab7759767eb6566b9dea0f6ae800eb43fb449_prof);

    }

    // line 3
    public function block_sylius_product_image_widget($context, array $blocks = array())
    {
        $__internal_a7c6652c32b7fea56e44ea4df6852250b404ae98f77badfd1397185cd223a701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c6652c32b7fea56e44ea4df6852250b404ae98f77badfd1397185cd223a701->enter($__internal_a7c6652c32b7fea56e44ea4df6852250b404ae98f77badfd1397185cd223a701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        $__internal_7206cc23183908124fc710114894bf3cc7f6423ca3905890548280f6185f75e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7206cc23183908124fc710114894bf3cc7f6423ca3905890548280f6185f75e7->enter($__internal_7206cc23183908124fc710114894bf3cc7f6423ca3905890548280f6185f75e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"ui upload box segment\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "type", array()), 'row');
        echo "
            <label for=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.choose_file"), "html", null, true);
        echo "</label>
            ";
        // line 8
        if ( !(null === ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array()), null)) : (null)))) {
            // line 9
            echo "                <img class=\"ui small bordered image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "vars", array()), "value", array()), "path", array()), "sylius_small"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "vars", array()), "value", array()), "type", array()), "html", null, true);
            echo "\" />
            ";
        }
        // line 11
        echo "            <div class=\"ui hidden element\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            </div>
            <div class=\"ui element\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "file", array()), 'errors');
        // line 16
        echo "</div>
            ";
        // line 17
        if ((( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 17, $this->getSourceContext()); })()), "id", array())) && (0 != twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 17, $this->getSourceContext()); })()), "variants", array())))) &&  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 17, $this->getSourceContext()); })()), "simple", array()))) {
            // line 18
            echo "                <br/>
                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "productVariants", array()), 'row', array("remote_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_variants_by_phrase", array("productCode" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 19, $this->getSourceContext()); })()), "code", array()))), "remote_criteria_type" => "contains", "remote_criteria_name" => "phrase", "load_edit_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_variants_by_codes", array("productCode" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 19, $this->getSourceContext()); })()), "code", array())))));
            echo "
            ";
        }
        // line 21
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7206cc23183908124fc710114894bf3cc7f6423ca3905890548280f6185f75e7->leave($__internal_7206cc23183908124fc710114894bf3cc7f6423ca3905890548280f6185f75e7_prof);

        
        $__internal_a7c6652c32b7fea56e44ea4df6852250b404ae98f77badfd1397185cd223a701->leave($__internal_a7c6652c32b7fea56e44ea4df6852250b404ae98f77badfd1397185cd223a701_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Form/imagesTheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  93 => 19,  90 => 18,  88 => 17,  85 => 16,  83 => 15,  78 => 12,  75 => 11,  67 => 9,  65 => 8,  59 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusUi/Form/imagesTheme.html.twig' %}

{% block sylius_product_image_widget %}
    {% spaceless %}
        <div class=\"ui upload box segment\">
            {{ form_row(form.type) }}
            <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.choose_file'|trans }}</label>
            {% if form.vars.value.path|default(null) is not null %}
                <img class=\"ui small bordered image\" src=\"{{ form.vars.value.path|imagine_filter('sylius_small') }}\" alt=\"{{ form.vars.value.type }}\" />
            {% endif %}
            <div class=\"ui hidden element\">
                {{ form_widget(form.file) }}
            </div>
            <div class=\"ui element\">
                {{- form_errors(form.file) -}}
            </div>
            {% if product.id is not null and 0 != product.variants|length and not product.simple %}
                <br/>
                {{ form_row(form.productVariants, {'remote_url': path('sylius_admin_ajax_product_variants_by_phrase', {'productCode': product.code}), 'remote_criteria_type': 'contains', 'remote_criteria_name': 'phrase', 'load_edit_url': path('sylius_admin_ajax_product_variants_by_codes', {'productCode': product.code})}) }}
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}
", "@SyliusAdmin/Form/imagesTheme.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Form\\imagesTheme.html.twig");
    }
}
