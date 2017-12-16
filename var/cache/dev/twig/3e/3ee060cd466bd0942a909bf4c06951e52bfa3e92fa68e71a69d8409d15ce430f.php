<?php

/* SyliusShopBundle:Checkout/Address:_addressBookSelect.html.twig */
class __TwigTemplate_78e6670497b5570bfdad82eba6d1040446616018514b01fce4fa00d5fa18f06c extends Twig_Template
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
        $__internal_a08217c9b05915c05c5dbb73f840f689bb2ebb5446aabb00a1955681b09bb4f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08217c9b05915c05c5dbb73f840f689bb2ebb5446aabb00a1955681b09bb4f3->enter($__internal_a08217c9b05915c05c5dbb73f840f689bb2ebb5446aabb00a1955681b09bb4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Address:_addressBookSelect.html.twig"));

        $__internal_1328dea52aa0f9c06343b6c695efef37663a89d765f592a34de5ff76ba271043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1328dea52aa0f9c06343b6c695efef37663a89d765f592a34de5ff76ba271043->enter($__internal_1328dea52aa0f9c06343b6c695efef37663a89d765f592a34de5ff76ba271043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Address:_addressBookSelect.html.twig"));

        // line 1
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "user", array())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "user", array()), "customer", array()))) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "user", array()), "customer", array()), "addresses", array())) > 0))) {
            // line 2
            echo "    <div class=\"ui fluid floating dropdown labeled search icon button address-book-select\">
        <i class=\"book icon\"></i>
        <span class=\"text\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.select_address_from_book"), "html", null, true);
            echo "</span>
        <div class=\"menu\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "user", array()), "customer", array()), "addresses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 7
                echo "                <div class=\"item\"
                     data-id=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "id", array()), "html", null, true);
                echo "\"
                     data-first-name=\"";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "firstName", array()), "html", null, true);
                echo "\"
                     data-last-name=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "lastName", array()), "html", null, true);
                echo "\"
                     data-company=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "company", array()), "html", null, true);
                echo "\"
                     data-street=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "street", array()), "html", null, true);
                echo "\"
                     data-country-code=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "countryCode", array()), "html", null, true);
                echo "\"
                     data-province-code=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "provinceCode", array()), "html", null, true);
                echo "\"
                     data-province-name=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "provinceName", array()), "html", null, true);
                echo "\"
                     data-city=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "city", array()), "html", null, true);
                echo "\"
                     data-postcode=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "postcode", array()), "html", null, true);
                echo "\"
                     data-phone-number=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "phoneNumber", array()), "html", null, true);
                echo "\"
                >
                    <strong>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "lastName", array()), "html", null, true);
                echo "</strong>, ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "street", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "city", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "postcode", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension')->translateCountryIsoCode(twig_get_attribute($this->env, $this->getSourceContext(), $context["address"], "countryCode", array())), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </div>
    </div>
";
        }
        
        $__internal_a08217c9b05915c05c5dbb73f840f689bb2ebb5446aabb00a1955681b09bb4f3->leave($__internal_a08217c9b05915c05c5dbb73f840f689bb2ebb5446aabb00a1955681b09bb4f3_prof);

        
        $__internal_1328dea52aa0f9c06343b6c695efef37663a89d765f592a34de5ff76ba271043->leave($__internal_1328dea52aa0f9c06343b6c695efef37663a89d765f592a34de5ff76ba271043_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/Address:_addressBookSelect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 23,  88 => 20,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  40 => 7,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.user is not empty and app.user.customer is not empty and app.user.customer.addresses|length > 0 %}
    <div class=\"ui fluid floating dropdown labeled search icon button address-book-select\">
        <i class=\"book icon\"></i>
        <span class=\"text\">{{ 'sylius.ui.select_address_from_book'|trans }}</span>
        <div class=\"menu\">
            {% for address in app.user.customer.addresses %}
                <div class=\"item\"
                     data-id=\"{{ address.id }}\"
                     data-first-name=\"{{ address.firstName }}\"
                     data-last-name=\"{{ address.lastName }}\"
                     data-company=\"{{ address.company }}\"
                     data-street=\"{{ address.street }}\"
                     data-country-code=\"{{ address.countryCode }}\"
                     data-province-code=\"{{ address.provinceCode }}\"
                     data-province-name=\"{{ address.provinceName }}\"
                     data-city=\"{{ address.city }}\"
                     data-postcode=\"{{ address.postcode }}\"
                     data-phone-number=\"{{ address.phoneNumber }}\"
                >
                    <strong>{{ address.firstName }} {{ address.lastName }}</strong>, {{ address.street }}, {{ address.city }} {{ address.postcode }}, {{ address.countryCode|sylius_country_name }}
                </div>
            {% endfor %}
        </div>
    </div>
{% endif %}
", "SyliusShopBundle:Checkout/Address:_addressBookSelect.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/Address/_addressBookSelect.html.twig");
    }
}
