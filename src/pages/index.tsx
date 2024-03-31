import * as React from "react";
import {useMemo, useState} from "react";
import {graphql} from "gatsby";
import Layout from "@/src/components/layout/layout";
import Seo from "@/src/components/seo";
import {getImage} from "gatsby-plugin-image";
import {Image, Link} from "@nextui-org/react";

const BlogIndex = ({ data, location }) => {
  const siteTitle = data.site.siteMetadata?.title || `Title`;
  let posts = data.allMarkdownRemark.nodes;
  const categories = useMemo<string[]>(() => [...new Set(posts.map((post) => post.frontmatter.category) as string[])], []);
  const [selectedCategory, selectSelectedCategory] = useState(null);

  if (selectedCategory == null) {
    posts = posts.filter((post) => ["TIL", "codekata"].indexOf(post.frontmatter.category) === -1);
  }

  if (posts.length === 0) {
    return (
      <Layout location={location} title={siteTitle}>
        <p>
          No posts
        </p>
      </Layout>
    );
  }

  return (
    <Layout location={location} title={siteTitle}>
      <div className="py-12">
        <div className="flex flex-col gap-4">
          {posts.map((post, idx) => {
            // if (selectedCategory != null && selectedCategory != post.frontmatter.category) return;
            const title = post.frontmatter.title || post.fields.slug;
            const image = getImage(post.frontmatter.thumbnail);

            return (
              <Link key={post.fields.slug} href={post.fields.slug} className="text-inherit">
                <article
                  itemScope
                  itemType="https://schema.org/Article"
                  className="w-full flex gap-4 border-1 p-4">
                  <div className="grow">
                    <header>
                      <div>
                        <small className="text-default-400">{post.frontmatter.category} | {post.frontmatter.date}</small>
                      </div>
                      <h2 className="font-bold text-xl my-1">{title}</h2>
                    </header>
                    <section className="text-sm text-default-400">
                      <p dangerouslySetInnerHTML={{
                        __html: post.frontmatter.description || post.excerpt
                      }}
                         itemProp="description" />
                    </section>
                  </div>
                  <div className="w-28 min-w-28 max-w-28">
                    <Image
                      src={image?.images?.fallback.src}
                      alt={post.thumbnail?.name ?? "thumbnail"}
                    />
                  </div>
                </article>
              </Link>
            );
          })}
        </div>
      </div>
    </Layout>
  );
};

export default BlogIndex;

/**
 * Head export to define metadata for the page
 *
 * See: https://www.gatsbyjs.com/docs/reference/built-in-components/gatsby-head/
 */
export const Head = () => <Seo title="All posts" lang={undefined} children={undefined} />;

export const pageQuery = graphql`
    query {
        site {
            siteMetadata {
                title
            }
        }
        allMarkdownRemark(
            sort: { fields: [frontmatter___date], order: DESC }
            filter: {
                frontmatter: {
                    category: { ne: null },
                    published: { eq: true }
                }
            }
        ) {
            nodes {
                excerpt
                fields {
                    slug
                }
                frontmatter {
                    date(formatString: "YYYY-MM-DD")
                    title
                    description
                    category
                    thumbnail {
                        name
                        childImageSharp {
                            gatsbyImageData(
                                width: 600
                                placeholder: BLURRED
                                formats: [AUTO, WEBP, AVIF]
                            )
                        }
                    }
                }
            }
        }
    }
`;
