<?php

/* SyliusAdminBundle:Product/Attribute:attributeValues.html.twig */
class __TwigTemplate_1327f4c75497f85aa9ad3e4b46bdfc8e3bc9459fd13035add6d6885e8b91f953 extends Twig_Template
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
        $__internal_42dbc0d0e0e65934a71e14fe48a58166354a7d7d214ca853de626973bf2cfb21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42dbc0d0e0e65934a71e14fe48a58166354a7d7d214ca853de626973bf2cfb21->enter($__internal_42dbc0d0e0e65934a71e14fe48a58166354a7d7d214ca853de626973bf2cfb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeValues.html.twig"));

        $__internal_137de59c392ce2ff226b15f5c8ce34fe46b1d8e4ae54e396c6eb9f2506a264e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137de59c392ce2ff226b15f5c8ce34fe46b1d8e4ae54e396c6eb9f2506a264e2->enter($__internal_137de59c392ce2ff226b15f5c8ce34fe46b1d8e4ae54e396c6eb9f2506a264e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeValues.html.twig"));

        // line 1
        $context["self"] = $this;
        // line 2
        echo "
";
        // line 3
        $context["subject"] = twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "name", array()), array("_attribute" => ""));
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new Twig_Error_Runtime('Variable "forms" does not exist.', 4, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["code"] => $context["localeCodes"]) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["localeCodes"]);
            foreach ($context['_seq'] as $context["localeCode"] => $context["form"]) {
                // line 6
                echo "        <div class=\"attribute\" data-id=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
            ";
                // line 7
                $context["id"] = twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["form"], "vars", array()), "label", array()), array(" " => "_")));
                // line 8
                echo "            ";
                if (twig_in_filter("type_checkbox", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["form"], "vars", array()), "cache_key", array()))) {
                    // line 9
                    echo "                ";
                    echo $context["self"]->macro_checkboxField($context["form"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 9, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 9, $this->getSourceContext()); })()), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 9, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 9, $this->getSourceContext()); })()), "applicationName", array()));
                    echo "
            ";
                } else {
                    // line 11
                    echo "                ";
                    echo $context["self"]->macro_textField($context["form"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 11, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 11, $this->getSourceContext()); })()), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 11, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 11, $this->getSourceContext()); })()), "applicationName", array()));
                    echo "
            ";
                }
                // line 13
                echo "            <input type=\"hidden\"
                   name=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 14, $this->getSourceContext()); })()), "applicationName", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
                echo "[attributes][";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
                echo "][attribute]\"
                   id=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 15, $this->getSourceContext()); })()), "applicationName", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
                echo "_attributes_";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
                echo "_attribute\"
                   value=\"";
                // line 16
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"/>
            <input type=\"hidden\"
                   name=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 18, $this->getSourceContext()); })()), "applicationName", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
                echo "[attributes][";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
                echo "][localeCode]\"
                   id=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 19, $this->getSourceContext()); })()), "applicationName", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
                echo "_attributes_";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
                echo "_localeCode\"
                   value=\"";
                // line 20
                echo twig_escape_filter($this->env, $context["localeCode"], "html", null, true);
                echo "\"/>
            ";
                // line 21
                $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 21, $this->getSourceContext()); })()) + 1);
                // line 22
                echo "        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['localeCode'], $context['form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['localeCodes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
";
        // line 43
        echo "
";
        // line 54
        echo "
";
        
        $__internal_42dbc0d0e0e65934a71e14fe48a58166354a7d7d214ca853de626973bf2cfb21->leave($__internal_42dbc0d0e0e65934a71e14fe48a58166354a7d7d214ca853de626973bf2cfb21_prof);

        
        $__internal_137de59c392ce2ff226b15f5c8ce34fe46b1d8e4ae54e396c6eb9f2506a264e2->leave($__internal_137de59c392ce2ff226b15f5c8ce34fe46b1d8e4ae54e396c6eb9f2506a264e2_prof);

    }

    // line 26
    public function macro_formField($__item__ = null, $__count__ = null, $__id__ = null, $__prefix__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "count" => $__count__,
            "id" => $__id__,
            "prefix" => $__prefix__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9531a85ecaadb497a1a94c14d8b77869f7426b84bc2267b9a525b69c7b7fdc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_9531a85ecaadb497a1a94c14d8b77869f7426b84bc2267b9a525b69c7b7fdc4e->enter($__internal_9531a85ecaadb497a1a94c14d8b77869f7426b84bc2267b9a525b69c7b7fdc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "formField"));

            $__internal_b968df8ddbb49d1c1c9f2eef13afa49d22569a861a6767319e674c125d49560b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b968df8ddbb49d1c1c9f2eef13afa49d22569a861a6767319e674c125d49560b->enter($__internal_b968df8ddbb49d1c1c9f2eef13afa49d22569a861a6767319e674c125d49560b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "formField"));

            // line 27
            echo "    ";
            $context["__internal_9a08e05a2313b5d43bd76177cc94d4727fdab8f8031bf09c56a664068371dd20"] = $this;
            // line 28
            echo "    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->getSourceContext()); })()), "children", array())) > 0)) {
                // line 29
                echo "        ";
                $context["prefix"] = (((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 29, $this->getSourceContext()); })()) . "_") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 29, $this->getSourceContext()); })()), "vars", array()), "name", array()));
                // line 30
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->getSourceContext()); })()), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 31
                    echo "            ";
                    echo $context["__internal_9a08e05a2313b5d43bd76177cc94d4727fdab8f8031bf09c56a664068371dd20"]->macro_formField($context["child"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 31, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 31, $this->getSourceContext()); })()), (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 31, $this->getSourceContext()); })()), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 31, $this->getSourceContext()); })()), (isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new Twig_Error_Runtime('Variable "applicationName" does not exist.', 31, $this->getSourceContext()); })()));
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 33, $this->getSourceContext()); })()), "vars", array()), "name", array()) != "_token")) {
                // line 34
                echo "        ";
                $context["namePrefix"] = twig_replace_filter((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 34, $this->getSourceContext()); })()), array("_" => "]["));
                // line 35
                echo "        ";
                $context["dataName"] = (((((((((isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new Twig_Error_Runtime('Variable "applicationName" does not exist.', 35, $this->getSourceContext()); })()) . "_") . (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 35, $this->getSourceContext()); })())) . "[attributes][") . (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 35, $this->getSourceContext()); })())) . (isset($context["namePrefix"]) || array_key_exists("namePrefix", $context) ? $context["namePrefix"] : (function () { throw new Twig_Error_Runtime('Variable "namePrefix" does not exist.', 35, $this->getSourceContext()); })())) . "][") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 35, $this->getSourceContext()); })()), "vars", array()), "name", array())) . "]");
                // line 36
                echo "        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "vars", array(), "any", false, true), "multiple", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 36, $this->getSourceContext()); })()), "vars", array()), "multiple", array()))) {
                    // line 37
                    echo "            ";
                    $context["dataName"] = ((isset($context["dataName"]) || array_key_exists("dataName", $context) ? $context["dataName"] : (function () { throw new Twig_Error_Runtime('Variable "dataName" does not exist.', 37, $this->getSourceContext()); })()) . "[]");
                    // line 38
                    echo "        ";
                }
                // line 39
                echo "
        ";
                // line 40
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 40, $this->getSourceContext()); })()), 'widget', array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 40, $this->getSourceContext()); })()), "attr" => array("data-name" => (isset($context["dataName"]) || array_key_exists("dataName", $context) ? $context["dataName"] : (function () { throw new Twig_Error_Runtime('Variable "dataName" does not exist.', 40, $this->getSourceContext()); })()))));
                echo "
    ";
            }
            
            $__internal_b968df8ddbb49d1c1c9f2eef13afa49d22569a861a6767319e674c125d49560b->leave($__internal_b968df8ddbb49d1c1c9f2eef13afa49d22569a861a6767319e674c125d49560b_prof);

            
            $__internal_9531a85ecaadb497a1a94c14d8b77869f7426b84bc2267b9a525b69c7b7fdc4e->leave($__internal_9531a85ecaadb497a1a94c14d8b77869f7426b84bc2267b9a525b69c7b7fdc4e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 44
    public function macro_textField($__form__ = null, $__count__ = null, $__id__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "count" => $__count__,
            "id" => $__id__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f446e3086f7dea06e2ac986ae4d2c43225d09874bf036fbba3b042d2addd26d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f446e3086f7dea06e2ac986ae4d2c43225d09874bf036fbba3b042d2addd26d1->enter($__internal_f446e3086f7dea06e2ac986ae4d2c43225d09874bf036fbba3b042d2addd26d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textField"));

            $__internal_e2a9f75d4565ab4afafa2c8fd9e8f0f5f8e5b9aef320499271f5adee2e538a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e2a9f75d4565ab4afafa2c8fd9e8f0f5f8e5b9aef320499271f5adee2e538a0c->enter($__internal_e2a9f75d4565ab4afafa2c8fd9e8f0f5f8e5b9aef320499271f5adee2e538a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textField"));

            // line 45
            echo "    ";
            $context["__internal_5af4dc038c855777aad6992eee660b1753640cbf41539144b4819c2957168fd4"] = $this;
            // line 46
            echo "    <div class=\"ui right fluid labeled input\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        <div class=\"ui label\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "vars", array()), "label", array()), "html", null, true);
            echo "</div>
        ";
            // line 48
            echo $context["__internal_5af4dc038c855777aad6992eee660b1753640cbf41539144b4819c2957168fd4"]->macro_formField((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 48, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 48, $this->getSourceContext()); })()), "", (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 48, $this->getSourceContext()); })()), (isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new Twig_Error_Runtime('Variable "applicationName" does not exist.', 48, $this->getSourceContext()); })()));
            echo "
        <button class=\"ui red right labeled icon button\">
            <i class=\"remove icon\"></i> ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete"), "html", null, true);
            echo "
        </button>
    </div>
";
            
            $__internal_e2a9f75d4565ab4afafa2c8fd9e8f0f5f8e5b9aef320499271f5adee2e538a0c->leave($__internal_e2a9f75d4565ab4afafa2c8fd9e8f0f5f8e5b9aef320499271f5adee2e538a0c_prof);

            
            $__internal_f446e3086f7dea06e2ac986ae4d2c43225d09874bf036fbba3b042d2addd26d1->leave($__internal_f446e3086f7dea06e2ac986ae4d2c43225d09874bf036fbba3b042d2addd26d1_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 55
    public function macro_checkboxField($__form__ = null, $__count__ = null, $__id__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "count" => $__count__,
            "id" => $__id__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_56a5ce1d2a60f2c10255634fcc0032e296d8a1cbc2071444a74c204afe04df5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_56a5ce1d2a60f2c10255634fcc0032e296d8a1cbc2071444a74c204afe04df5e->enter($__internal_56a5ce1d2a60f2c10255634fcc0032e296d8a1cbc2071444a74c204afe04df5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkboxField"));

            $__internal_23e3e31ac24592d2f4f170372d76c50a625ec76dbcf119528717a3108217fbf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_23e3e31ac24592d2f4f170372d76c50a625ec76dbcf119528717a3108217fbf7->enter($__internal_23e3e31ac24592d2f4f170372d76c50a625ec76dbcf119528717a3108217fbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkboxField"));

            // line 56
            echo "    ";
            $context["__internal_db4d63b57b0bb3617e6ef63c3c7b685559c7dd6dd575e6518beacd90f6ae32aa"] = $this;
            // line 57
            echo "    <div class=\"ui toggle checkbox\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        ";
            // line 58
            echo $context["__internal_db4d63b57b0bb3617e6ef63c3c7b685559c7dd6dd575e6518beacd90f6ae32aa"]->macro_formField((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 58, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 58, $this->getSourceContext()); })()), "", (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 58, $this->getSourceContext()); })()), (isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new Twig_Error_Runtime('Variable "applicationName" does not exist.', 58, $this->getSourceContext()); })()));
            echo "
        <label>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->getSourceContext()); })()), "vars", array()), "label", array()), "html", null, true);
            echo "</label>
    </div>
    <button class=\"ui red right labeled icon button\" style=\"float: right;\">
        <i class=\"remove icon\"></i> ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete"), "html", null, true);
            echo "
    </button>
";
            
            $__internal_23e3e31ac24592d2f4f170372d76c50a625ec76dbcf119528717a3108217fbf7->leave($__internal_23e3e31ac24592d2f4f170372d76c50a625ec76dbcf119528717a3108217fbf7_prof);

            
            $__internal_56a5ce1d2a60f2c10255634fcc0032e296d8a1cbc2071444a74c204afe04df5e->leave($__internal_56a5ce1d2a60f2c10255634fcc0032e296d8a1cbc2071444a74c204afe04df5e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Attribute:attributeValues.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 62,  310 => 59,  306 => 58,  303 => 57,  300 => 56,  278 => 55,  259 => 50,  254 => 48,  250 => 47,  247 => 46,  244 => 45,  222 => 44,  204 => 40,  201 => 39,  198 => 38,  195 => 37,  192 => 36,  189 => 35,  186 => 34,  183 => 33,  174 => 31,  169 => 30,  166 => 29,  163 => 28,  160 => 27,  137 => 26,  126 => 54,  123 => 43,  120 => 25,  109 => 22,  107 => 21,  103 => 20,  95 => 19,  87 => 18,  82 => 16,  74 => 15,  66 => 14,  63 => 13,  57 => 11,  51 => 9,  48 => 8,  46 => 7,  41 => 6,  36 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as self %}

{% set subject = metadata.name|replace({'_attribute': ''}) %}
{% for code, localeCodes in forms %}
    {% for localeCode, form in localeCodes %}
        <div class=\"attribute\" data-id=\"{{ code }}\">
            {% set id = form.vars.label|replace({' ': '_'})|lower %}
            {% if 'type_checkbox' in form.vars.cache_key %}
                {{ self.checkboxField(form, count, id, subject, metadata.applicationName) }}
            {% else %}
                {{ self.textField(form, count, id, subject, metadata.applicationName) }}
            {% endif %}
            <input type=\"hidden\"
                   name=\"{{ metadata.applicationName }}_{{ subject }}[attributes][{{ count }}][attribute]\"
                   id=\"{{ metadata.applicationName }}_{{ subject }}_attributes_{{ count }}_attribute\"
                   value=\"{{ code }}\"/>
            <input type=\"hidden\"
                   name=\"{{ metadata.applicationName }}_{{ subject }}[attributes][{{ count }}][localeCode]\"
                   id=\"{{ metadata.applicationName }}_{{ subject }}_attributes_{{ count }}_localeCode\"
                   value=\"{{ localeCode }}\"/>
            {% set count = count + 1 %}
        </div>
    {% endfor %}
{% endfor %}

{% macro formField(item, count, id, prefix, subject, applicationName) %}
    {% from _self import formField %}
    {% if item.children|length > 0 %}
        {% set prefix = prefix~'_'~item.vars.name %}
        {% for child in item.children %}
            {{ formField(child, count, id, prefix, subject, applicationName) }}
        {% endfor %}
    {% elseif item.vars.name != '_token' %}
        {% set namePrefix = prefix|replace({'_': ']['}) %}
        {% set dataName = applicationName~'_'~subject~'[attributes]['~count~namePrefix~']['~item.vars.name~']' %}
        {% if item.vars.multiple is defined and item.vars.multiple %}
            {% set dataName = dataName~'[]' %}
        {% endif %}

        {{ form_widget(item, {'id': id, 'attr': {'data-name': dataName }}) }}
    {% endif %}
{% endmacro %}

{% macro textField(form, count, id, subject, applicationName) %}
    {% from _self import formField %}
    <div class=\"ui right fluid labeled input\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        <div class=\"ui label\">{{ form.vars.label }}</div>
        {{ formField(form, count, id, '', subject, applicationName) }}
        <button class=\"ui red right labeled icon button\">
            <i class=\"remove icon\"></i> {{ 'sylius.ui.delete'|trans }}
        </button>
    </div>
{% endmacro %}

{% macro checkboxField(form, count, id, subject, applicationName) %}
    {% from _self import formField %}
    <div class=\"ui toggle checkbox\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        {{ formField(form, count, id, '', subject, applicationName) }}
        <label>{{ form.vars.label }}</label>
    </div>
    <button class=\"ui red right labeled icon button\" style=\"float: right;\">
        <i class=\"remove icon\"></i> {{ 'sylius.ui.delete'|trans }}
    </button>
{% endmacro %}
", "SyliusAdminBundle:Product/Attribute:attributeValues.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Attribute/attributeValues.html.twig");
    }
}
