<?php

/* SyliusAdminBundle:Product/Tab:_associations.html.twig */
class __TwigTemplate_65be77b6b23762b4e83fff7f6babf6bd8ffc46c3d3192aad4e5bf309ca8a9ef4 extends Twig_Template
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
        $__internal_885560436ad6c6e4231344a1b1272ab5a2efe51cd34c50ecd60c493a5cf80748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885560436ad6c6e4231344a1b1272ab5a2efe51cd34c50ecd60c493a5cf80748->enter($__internal_885560436ad6c6e4231344a1b1272ab5a2efe51cd34c50ecd60c493a5cf80748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_associations.html.twig"));

        $__internal_ef2322d3db7816f9962e3cfd3cb8c664e17e3e9e02952ba3c191d4f64cae4df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2322d3db7816f9962e3cfd3cb8c664e17e3e9e02952ba3c191d4f64cae4df5->enter($__internal_ef2322d3db7816f9962e3cfd3cb8c664e17e3e9e02952ba3c191d4f64cae4df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_associations.html.twig"));

        // line 1
        echo "<div class=\"ui tab\" data-tab=\"associations\">
    <h3 class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.associations"), "html", null, true);
        echo "</h3>

    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "associations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["associationForm"]) {
            // line 5
            echo "        <div class=\"field\">";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["associationForm"], 'label');
            // line 7
            echo "<div class=\"product-select ui fluid multiple search selection dropdown\" data-url=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_index");
            echo "\">
                ";
            // line 8
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["associationForm"], 'widget', array("attr" => array("class" => "autocomplete")));
            echo "
                <i class=\"dropdown icon\"></i>
                <div class=\"default text\">";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.select_products"), "html", null, true);
            echo "</div>
                <div class=\"menu\">
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->getSourceContext()); })()), "associations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
                // line 13
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["association"], "type", array()), "code", array()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["associationForm"], "vars", array()), "name", array()))) {
                    // line 14
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["association"], "associatedProducts", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["associatedProduct"]) {
                        // line 15
                        echo "                                <div class=\"item\" data-value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["associatedProduct"], "code", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["associatedProduct"], "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["associatedProduct"], "name", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["associatedProduct"], "code", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["associatedProduct"], "code", array()))), "html", null, true);
                        echo "</div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associatedProduct'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "                        ";
                }
                // line 18
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                </div>
            </div>
            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["associationForm"], 'errors');
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 25, $this->getSourceContext()); })())) . ".tab_associations"), array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()))));
        echo "
</div>
";
        
        $__internal_885560436ad6c6e4231344a1b1272ab5a2efe51cd34c50ecd60c493a5cf80748->leave($__internal_885560436ad6c6e4231344a1b1272ab5a2efe51cd34c50ecd60c493a5cf80748_prof);

        
        $__internal_ef2322d3db7816f9962e3cfd3cb8c664e17e3e9e02952ba3c191d4f64cae4df5->leave($__internal_ef2322d3db7816f9962e3cfd3cb8c664e17e3e9e02952ba3c191d4f64cae4df5_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Tab:_associations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  101 => 24,  92 => 21,  88 => 19,  82 => 18,  79 => 17,  68 => 15,  63 => 14,  60 => 13,  56 => 12,  51 => 10,  46 => 8,  41 => 7,  39 => 6,  37 => 5,  33 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui tab\" data-tab=\"associations\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.associations'|trans }}</h3>

    {% for associationForm in form.associations %}
        <div class=\"field\">
            {{- form_label(associationForm) -}}
            <div class=\"product-select ui fluid multiple search selection dropdown\" data-url=\"{{ path('sylius_admin_ajax_product_index') }}\">
                {{ form_widget(associationForm, {'attr': {'class' : 'autocomplete'}}) }}
                <i class=\"dropdown icon\"></i>
                <div class=\"default text\">{{'sylius.ui.select_products'|trans}}</div>
                <div class=\"menu\">
                    {% for association in product.associations %}
                        {% if association.type.code == associationForm.vars.name %}
                            {% for associatedProduct in association.associatedProducts %}
                                <div class=\"item\" data-value=\"{{ associatedProduct.code }}\">{{ associatedProduct.name|default(associatedProduct.code) }}</div>
                            {% endfor %}
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
            {{ form_errors(associationForm) }}
        </div>
    {% endfor %}

    {{ sonata_block_render_event('sylius.admin.product.' ~ action ~ '.tab_associations', {'form': form}) }}
</div>
", "SyliusAdminBundle:Product/Tab:_associations.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Tab/_associations.html.twig");
    }
}
