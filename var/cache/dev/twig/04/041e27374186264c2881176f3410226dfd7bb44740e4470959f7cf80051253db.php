<?php

/* @SyliusShop/Product/_horizontalList.html.twig */
class __TwigTemplate_11e77fbd8eacf9e08dd983c46de3b76599aca086d5be40aacc5c53dd90e47924 extends Twig_Template
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
        $__internal_d616377dc96a9819577e939852070a538f952eb895621f8cc9aa3adf6c38bd84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d616377dc96a9819577e939852070a538f952eb895621f8cc9aa3adf6c38bd84->enter($__internal_d616377dc96a9819577e939852070a538f952eb895621f8cc9aa3adf6c38bd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_horizontalList.html.twig"));

        $__internal_3aa21a7b54aac69f5183b6a0d57706ebc9fc3012754babc69d0308f0c21f0bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa21a7b54aac69f5183b6a0d57706ebc9fc3012754babc69d0308f0c21f0bda->enter($__internal_3aa21a7b54aac69f5183b6a0d57706ebc9fc3012754babc69d0308f0c21f0bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_horizontalList.html.twig"));

        // line 1
        echo "<div class=\"ui four column stackable grid\">
    <div class=\"row\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 3, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "            <div class=\"column\">
                ";
            // line 5
            $this->loadTemplate("@SyliusShop/Product/_box.html.twig", "@SyliusShop/Product/_horizontalList.html.twig", 5)->display($context);
            // line 6
            echo "            </div>
    ";
            // line 7
            if ((0 == (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) % 4))) {
                // line 8
                echo "    </div>
    <div class=\"row\">
    ";
            }
            // line 11
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
</div>
";
        
        $__internal_d616377dc96a9819577e939852070a538f952eb895621f8cc9aa3adf6c38bd84->leave($__internal_d616377dc96a9819577e939852070a538f952eb895621f8cc9aa3adf6c38bd84_prof);

        
        $__internal_3aa21a7b54aac69f5183b6a0d57706ebc9fc3012754babc69d0308f0c21f0bda->leave($__internal_3aa21a7b54aac69f5183b6a0d57706ebc9fc3012754babc69d0308f0c21f0bda_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_horizontalList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  61 => 11,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui four column stackable grid\">
    <div class=\"row\">
        {% for product in products %}
            <div class=\"column\">
                {% include '@SyliusShop/Product/_box.html.twig' %}
            </div>
    {% if 0 == loop.index % 4 %}
    </div>
    <div class=\"row\">
    {% endif %}
        {% endfor %}
    </div>
</div>
", "@SyliusShop/Product/_horizontalList.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\_horizontalList.html.twig");
    }
}
