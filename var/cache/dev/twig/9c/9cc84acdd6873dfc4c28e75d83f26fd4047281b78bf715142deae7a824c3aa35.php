<?php

/* SyliusAdminBundle:Product:_position.html.twig */
class __TwigTemplate_80223aef7e53d396ab6c82e997ba69bd016b3b89a0c966b5d6714323caa2de45 extends Twig_Template
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
        $__internal_ca757f362e90815a12ef069b39151fdd1d41da494f5efb65b4f8dfabcb1f8455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca757f362e90815a12ef069b39151fdd1d41da494f5efb65b4f8dfabcb1f8455->enter($__internal_ca757f362e90815a12ef069b39151fdd1d41da494f5efb65b4f8dfabcb1f8455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_position.html.twig"));

        $__internal_d0d5a21e3cf90ebb55dcbdbdfe5f8088d912b2bf3b2a07347299cc7f4246a446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d5a21e3cf90ebb55dcbdbdfe5f8088d912b2bf3b2a07347299cc7f4246a446->enter($__internal_d0d5a21e3cf90ebb55dcbdbdfe5f8088d912b2bf3b2a07347299cc7f4246a446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_position.html.twig"));

        // line 1
        if ((isset($context["taxonId"]) || array_key_exists("taxonId", $context) ? $context["taxonId"] : (function () { throw new Twig_Error_Runtime('Variable "taxonId" does not exist.', 1, $this->getSourceContext()); })())) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->getSourceContext()); })()), "productTaxons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["productTaxon"]) {
                // line 3
                echo "        ";
                if (((isset($context["taxonId"]) || array_key_exists("taxonId", $context) ? $context["taxonId"] : (function () { throw new Twig_Error_Runtime('Variable "taxonId" does not exist.', 3, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["productTaxon"], "taxon", array()), "id", array()))) {
                    // line 4
                    echo "            <div style=\"width: 100%; text-align: center;\">
                <div class=\"ui input position\" style=\"width: 50px;\">
                    <input type='text' value=\"";
                    // line 6
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["productTaxon"], "position", array()), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["productTaxon"], "id", array()), "html", null, true);
                    echo "\" class=\"sylius-product-taxon-position\" style=\"text-align: center;\" />
                </div>
            </div>
        ";
                }
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productTaxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ca757f362e90815a12ef069b39151fdd1d41da494f5efb65b4f8dfabcb1f8455->leave($__internal_ca757f362e90815a12ef069b39151fdd1d41da494f5efb65b4f8dfabcb1f8455_prof);

        
        $__internal_d0d5a21e3cf90ebb55dcbdbdfe5f8088d912b2bf3b2a07347299cc7f4246a446->leave($__internal_d0d5a21e3cf90ebb55dcbdbdfe5f8088d912b2bf3b2a07347299cc7f4246a446_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_position.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  39 => 6,  35 => 4,  32 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if taxonId %}
    {% for productTaxon in product.productTaxons%}
        {% if taxonId == productTaxon.taxon.id %}
            <div style=\"width: 100%; text-align: center;\">
                <div class=\"ui input position\" style=\"width: 50px;\">
                    <input type='text' value=\"{{ productTaxon.position }}\" data-id=\"{{ productTaxon.id }}\" class=\"sylius-product-taxon-position\" style=\"text-align: center;\" />
                </div>
            </div>
        {% endif %}
    {% endfor %}
{% endif %}
", "SyliusAdminBundle:Product:_position.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/_position.html.twig");
    }
}
